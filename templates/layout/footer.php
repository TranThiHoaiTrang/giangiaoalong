<!-- <div class="wrap_socialpage">
    <div class="fixwidth">
        <div class="owl-carousel owl-theme auto_social">
            <?php foreach($socialpage as $v) { ?>
                <div class="socialpage">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="socialpage-img">
                            <a href="<?=$v['link']?>" target="_blank" title="<?=$v['ten'.$lang]?>"><img onerror="this.src='<?=THUMBS?>/55x55x2/assets/images/noimage.png';" src="<?=THUMBS?>/0x55x2/<?=UPLOAD_PHOTO_L.$v['photo']?>" alt="<?=$v['ten'.$lang]?>" title="<?=$v['ten'.$lang]?>"/></a>
                        </div>
                        <div class="socialpage-name">
                            <a href="<?=$v['link']?>" target="_blank" title="<?=$v['ten'.$lang]?>"><?=$v['ten'.$lang]?></a>
                            
                        </div>
                    </div>
                    <div class="mota_socialpage"><?=$v['mota'.$lang]?></div>
                    <a href="<?=$v['link']?>" class="socialpage-btn" target="_blank" title="<?=$v['ten'.$lang]?>">Tham gia ngay</a>
                </div>
                
            <?php }?>
        </div>
    </div>
</div> -->
<div class="boxfooter_container " id="background-footer">
    <div class="footer_name"><?=$setting['tenvi']?></div>
    <div class="fixwidth d-flex justify-content-between flex-wrap align-items-center">
        <div class="boxfooter_left d-flex justify-content-between align-items-center">
            <div class="ft0icon"><img src="assets/images/img-data/icon1.png"></div>
            <div class="ft0icon_info"><?=$optsetting['diachi']?></div>
        </div>

        <div class="boxfooter_middle d-flex justify-content-between align-items-center">
            <div class="ft0icon"><img src="assets/images/img-data/icon2.png"></div>
            <div class="ft0icon_info">
                Hotline:<br>
                <?=$optsetting['hotline']?>

            </div>
        </div>            
        <div class="boxfooter_middle1 d-flex justify-content-between align-items-center">
            <div class="ft0icon"><img src="assets/images/img-data/icon3.png"></div>
            <div class="ft0icon_info">
                Email liên hệ:<br>
                <?=$optsetting['email']?>

            </div>
        </div>      
        
    </div>
    <div class="boxfooter_bottom">
    <?=$optsetting['copyright']?>
</div>
</div>

</div>
<!-- <div class="bottom-contact1"><
    ?=htmlspecialchars_decode($optsetting['toado_iframe'])?></div> -->