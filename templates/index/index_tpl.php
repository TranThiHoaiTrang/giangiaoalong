<?php include "./templates/layout/css.php" ;
function catchuoi($chuoi,$gioihan){
	if(strlen($chuoi)<=$gioihan)
	{
		return $chuoi;
	}
	else
	{
		if(strpos($chuoi," ",$gioihan) > $gioihan)
		{
			$new_gioihan=strpos($chuoi," ",$gioihan);
			$new_chuoi = substr($chuoi,0,$new_gioihan)."...";
			return $new_chuoi;
		}
		$new_chuoi = substr($chuoi,0,$gioihan)."...";
		return $new_chuoi;
	}
}
?>
<div class="wrap_gioithieu background-gt" id="background-gioithieu">
	<div class="fixwidth" >
 
	<div class="title_thongtin"><span class="sp1">VỀ CHÚNG TÔI</span> </div>
		<div class="gt_noidung"><?=htmlspecialchars_decode($gioithieu['mota'.$lang])?></div>
		<a class="xemgt" href="gioi-thieu">Xem thêm</a>

		
	</div>
</div>
<?php if($pronb_list['numb']>0){?>
	<div class="wrap_product">
		<div class="wrap_product_index">
			<div class="fixwidth">
			<div class="title_thongtin"><span class="sp1">SẢN PHẨM</span> <span class="sp2">NỖI BẬT</span></div>
				<!-- <div class="paging-product-index" id="load_pro_0" data-id="0"></div> -->
				<?php 
            	$splistsp1 = $d->rawQuery("select * from table_product_list  Where hienthi > 0 ");
            	?>
            	<?php foreach($splistsp1 as $v){ ?>
            	<?php 
            	    $id1 = $v['id'];
            	    $where = "where id_list=" . $id1;
            	    $splistsp1_allsp = $d->rawQuery("select * from table_product $where  and hienthi > 0 order by stt,id desc");
            	?>
            	<div class="name_sp_1"><?= $v['tenvi'] ?></div>
            	<div class="sp_cap1_all">
            	    <div class="owl-carousel owl-theme auto_dcategory">
            	        <?php foreach($splistsp1_allsp as $a) {?>
            	        <div class="boxproduct_item sp_cap1">
            	            <a class="boxproduct_img" href="<?=$a['tenkhongdauvi']?>">
								<span>
									<img
            	                        onerror="this.src='<?=THUMBS?>/380x270x2/assets/images/noimage.png';"
            	                        src="<?=UPLOAD_PRODUCT_L.$a['photo']?>"
            	                        alt="<?=$a['ten'.$lang]?>" />
								</span>
							</a>
            	            <div class="boxproduct_info">
            	                <div class="boxproduct_name">
									<a href="<?=$a['tenkhongdauvi']?>"
            	                        title="<?=$v['tenvi']?>"><?=$a['ten'.$lang]?>
									</a>
								</div>
								<div class="boxproduct_name">
									<p><?= catchuoi(htmlspecialchars_decode($v['motavi']),60) ?></p>
								</div>
            	            </div>
            	        </div>
            	        <?php } ?>

            	    </div>
            	</div>
            	<?php }?>
			</div>
		</div>
	</div>
<?php }?>
 <!-- </?php if($ct_list['numb']>0){?>
	<div class="wrap_product">
		<div class="wrap_product_index toppd0">
			<div class="fixwidth">
				<div class="title">CÔNG TRÌNH NỔI BẬT</div>
				<div class="paging-product"></div>
			</div>
		</div>
	</div>
</?php }?> -->
 
<div class="wrap_product">
	<div class="wrap_product_index">
		<div class="fixwidth">
			<div class="row">
				<div class="col-md-6" style="background-color: #e5f6fd;">
					<div class="title_thongtin"><span class="sp1">Thông</span> <span class="sp2">Tin</span></div>
					<div class="roll_news">
	            	<ul>
	            		<?php foreach($tintuc as $k=>$v){?>
	            			<li>
		            			<div class="news_bt news_bt_thongtin w-clear">
		            				<div class="info-news">
		            					<h3 class="name-news"><a class="text-decoration-none" href="<?=$v[$sluglang]?>" title="<?=$v['ten'.$lang]?>"><?=$v['ten'.$lang]?></a></h3>
		            					<!-- <div class="desc-news text-split"><?=$v['mota'.$lang]?></div> -->
		            				</div>
		            			</div>
		            		</li>
	            		<?php }?>
	            	</ul>
	            </div>
				</div>
				<div class="col-md-6" id="background-thongtin"></div>
			</div>
		</div>
	</div>
</div>

<!-- <div class="background-dv" id="background-tieuchi">
    <div class="fixwidth">
	    <div class="owl-carousel owl-theme owl-dv">
	    	<?php foreach($duan as $k=>$v){ ?>
	    		<div class="item_dv w-clear">
	    			<div class="pic-news">
	    				<a class="text-decoration-none" href="<?=$v[$sluglang]?>" title="<?=$v['ten'.$lang]?>"><img onerror="this.src='<?=THUMBS?>/80x80x2/assets/images/noimage.png';" src="<?=THUMBS?>/80x80x2/<?=UPLOAD_NEWS_L.$v['icon']?>" alt="<?=$v['ten'.$lang]?>">
	    				</a>
	    			</div>
	    			<div class="info-news">
	    				<h3 class="name-news"><a class="text-decoration-none" href="<?=$v[$sluglang]?>" title="<?=$v['ten'.$lang]?>"><?=$v['ten'.$lang]?></a></h3>
	    				<div class="desc-news text-split"><?=$v['mota'.$lang]?></div>
	    			</div>
	    		</div>
	    	<?php }?>
	    </div>
    </div>
</div> 
<div class="wrap_bottom">
	<div class="fixwidth">
		<div class="title-video">VIDEO CLIP</div>
		<div class="owl-carousel owl-theme auto_video">
			<?php foreach($video as $k=>$v){?>
					<a data-fancybox="video" class="tailvideo_item_owl" data-src="<?=$v['video']?>" data-name="<?=$v['ten'.$lang]?>" title="<?=$v['ten'.$lang]?>" style="background:url(https://img.youtube.com/vi/<?=$func->getYoutube($v['video'])?>/hqdefault.jpg) no-repeat center; background-size:cover;">
					</a>
			<?php }?>
		</div>
	 
	</div>
</div> -->
<div class="cophan"id="background-tieuchi">
	<div class="fixwidth">
		<div class="name_cophan">
			<i class="fas fa-quote-left" style="font-size: 10px;"></i>
			<?=$setting['tenvi']?>
			<i class="fas fa-quote-right" style="font-size: 10px;"></i>
		</div>
	</div>
</div>
<div class="wrap_bottom" style="padding: 0;">
    <div >
	    <div class="d-flex justify-content-between flex-wrap"> 
	        <div class="left_bottom">
	            <div class="from_left_bottom">
					<div class="title_bottom">TIN TỨC SỰ KIỆN</div>
					<div class="from_slogan" >
						<i class="fas fa-quote-left" style="font-size: 10px;"></i>
						<div class="slogan" style="margin-left: 10px;"><?=$optsetting['slogan']?></div>
					</div>
	            	<div class="rows" >
	            		<div class="roll_news">
	            			<ul>
	            				<?php foreach($duan as $k=>$v){?>
	            					<li>
		        		    			<div class="news_bt w-clear">
								
		        		    				<div class="info-news">
												<div class="pic-news scale-img  pic_chinhsach" >
		        		    						<a class="text-decoration-none" href="<?=$v[$sluglang]?>" title="<?=$v['ten'.$lang]?>"><img style="width:50%" onerror="this.src='<?=THUMBS?>/150x150x1/assets/images/noimage.png';" src="<?=THUMBS?>/80x80x2/<?=UPLOAD_NEWS_L.$v['icon']?>" alt="<?=$v['ten'.$lang]?>"></a>
		        		    					</div>
		        		    					<div class="chinh-sach-noidung">
													<h3 class="name-news"><a style="color: #fff;" class="text-decoration-none" href="<?=$v[$sluglang]?>" title="<?=$v['ten'.$lang]?>"><?=$v['ten'.$lang]?></a></h3>
		        		    						<div class="desc-news text-split"><?=$v['mota'.$lang]?></div>
												</div>
		        		    				</div>
		        		    			</div>
		        		    		</li>
	            				<?php }?>
	            			</ul>
	            		</div>
	            	</div>
				</div>
	        </div>
	        <div class="right_bottom">
				<div class="from_left_bottom">
					<div class="title_bottom">CẢM NHẬN KHÁCH HÀNG</div>
					<div class="slider slider-nav">
						<?php foreach($kh as $k=>$v){?>
							<div>
								<div class="item_kh_img">
									<img onerror="this.src='<?=THUMBS?>/195x195x1/assets/images/noimage.png';" src="<?=THUMBS?>/195x195x1/<?=UPLOAD_NEWS_L.$v['photo']?>" alt="<?=$v['ten'.$lang]?>">
								</div>
							</div>
						<?php }?>
						
					</div>
					<div class="slider slider-for">
						<?php foreach($kh as $k=>$v){?>
						<div>
							<div class="item_kh_info">
								<div class="mota_kh"><?=$v['mota'.$lang]?></div>
								<i class="fas fa-quote-left"></i>
								<div class="name_kh"><?=$v['ten'.$lang]?></div>
								<div class="diachi_kh"><?=$v['diachi']?></div>
							</div>
						</div>
						<?php }?>
					</div>
				</div>
	        </div>
	    </div>
    </div>
</div>
