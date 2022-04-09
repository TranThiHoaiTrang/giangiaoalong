<?php
    if((isset($_GET['month']) && $_GET['month'] != '') && (isset($_GET['year']) && $_GET['year'] != '')){
        $time = $_GET['year'].'-'.$_GET['month'].'-1';
        $date = strtotime($time);
    }else{
        $date = strtotime(date('y-m-d')); 
    }

    $day = date('d', $date);
    $month = date('m', $date);
    $year = date('Y', $date);
    $firstDay = mktime(0,0,0,$month, 1, $year);
    $title = strftime('%B', $firstDay);
    $dayOfWeek = date('D', $firstDay);
    $daysInMonth = cal_days_in_month(0, $month, $year);
    $timestamp = strtotime('next Sunday');
    $weekDays = array();

    for($i=0;$i<7;$i++){
        $weekDays[] = strftime('%a', $timestamp);
        $timestamp = strtotime('+1 day', $timestamp);
    }

    $blank = date('w', strtotime("{$year}-{$month}-01"));
?>
<script type="text/javascript">
$(function () {
    $('#container').highcharts({
        chart: {
            type: 'spline'
        },
        colors: ['#6CF', '#39F', '#06C', '#036', '#000'],
        title: {
            text: 'Thống kê truy cập tháng : <?php echo $month ?> - <?php echo $year ?>'
        },
        subtitle: {
            text: ''
        },
        xAxis: {
            type: 'category',
            labels: {
                rotation: -45,
                style: {
                    fontSize: '13px',
                    fontFamily: 'Arial'
                }
            }
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Số người truy cập'
            }
        },
        legend: {
            enabled: false
        },
        tooltip: {
            pointFormat: 'Tổng : <b>{point.y:.1f} Lượt truy cập</b>'
        },
        series: [{
            name: 'Population',
            data: [
            <?php for($i = 1; $i <= $daysInMonth; $i++):
                $k = $i+1;
                $begin = strtotime($year.'-'.$month.'-'.$i);
                $end = strtotime($year.'-'.$month.'-'.$k);
                $todayrc = $d->rawQueryOne("select count(*) as todayrecord from #_counter where tm >= ? and tm < ?",array($begin,$end));
                $today_visitors = $todayrc['todayrecord'];
            ?>
                ['<?=$i?>', <?=$today_visitors?>],
            <?php endfor; ?>
            ],
            dataLabels: {
                enabled: true,
                rotation: -90,
                color: '#FFFFFF',
                align: 'right',
                format: '{point.y:.1f}', // one decimal
                y: 10, // 10 pixels down from the top
                style: {
                    fontSize: '13px',
                    fontFamily: 'Arial'
                }
            }
        }]
    });
    $( "#datepicker" ).datepicker({
      dateFormat: 'yy-mm-dd'
    });
});
</script>
<!-- Main content -->
<section class="content mb-3">
    <div class="container-fluid">
        <h5 class="pt-3 pb-2">Dashboard</h5>
        <div class=" mb-2 text-sm">
            <div class="thongke">
                <?php $statistic2=$statistic->getCounter(); ?>
                <p><i class="fas fa-user"></i>Đang online <span><?=$statistic->getOnline()?></span></p>
                <p><i class="fas fa-user-friends"></i>Truy cập tuần <span><?=$statistic2['week']?></span></p>
                <p><i class="fas fa-users"></i>Truy cập tháng <span><?=$statistic2['month']?></span></p>
                <p><i class="fas fa-signal"></i>Tổng truy cập <span><?=$statistic2['total']?></span></p>
            </div>
        </div>
    </div>
</section>

<section class="content pb-4">
   <div class="container-fluid">
       <div class="card">
           <div class="card-header">
               <h5 class="mb-0">Thống kê truy cập tháng <?=$month?>/<?=$year?></h5>
           </div>
           <div class="card-body">
            <form class="form-filter-charts row align-items-center mb-1" action="index.php" method="get" name="form-thongke" accept-charset="utf-8">
                <div id="container" style="width: 100%; height: 400px; margin: 0 auto"></div>
            </form>
               <div id="apexMixedChart"></div>
                   <div class="thongtin">
                    <p><i class="fas fa-envelope"></i>Email <span>info@sotagroup.vn</span></p>
                    <p><i class="fas fa-phone-volume"></i>Hotline <span>0939.857.111</span></p>
                    <p><i class="fab fa-facebook-messenger"></i>Zalo <span><a href="https://zalo.me/0939857111">0939.857.111</a></span></p>
                </div>
           </div>
       </div>
   </div>
</section>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="js/highcharts/modules/exporting.js"></script>