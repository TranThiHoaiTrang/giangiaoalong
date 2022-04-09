<?php
    /* Giới thiệu */
    $nametype = "gioi-thieu";
    $config['static'][$nametype]['title_main'] = "Giới thiệu";
    $config['static'][$nametype]['images'] = false;
    $config['static'][$nametype]['images2'] = false;
    $config['static'][$nametype]['file'] = false;
    $config['static'][$nametype]['tieude'] = false;
    $config['static'][$nametype]['mota'] = true;
    $config['static'][$nametype]['mota_cke'] = true;
    $config['static'][$nametype]['noidung'] = true;
    $config['static'][$nametype]['noidung_cke'] = true;
    $config['static'][$nametype]['seo'] = false;
    $config['static'][$nametype]['width'] = 465;
    $config['static'][$nametype]['height'] = 315;    
    $config['static'][$nametype]['width1'] = 440;
    $config['static'][$nametype]['height1'] = 325;
    /*$config['static'][$nametype]['gallery'] = array(
        $nametype => array(
            "title_main_photo" => "Hình ảnh chứng nhận",
            "title_sub_photo" => "Hình ảnh",
            "number_photo" => 3,
            "images_photo" => true,
            "cart_photo" => true,
            "avatar_photo" => true,
            "tieude_photo" => true,
            "width_photo" => 560,
            "height_photo" => 560,
            "thumb_photo" => '100x100x1',
            "img_type_photo" => '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF'
        ),
        
    );*/
    $config['static'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF';
    $config['static'][$nametype]['file_type'] = 'doc|docx|pdf|rar|zip|ppt|pptx|DOC|DOCX|PDF|RAR|ZIP|PPT|PPTX|xls|jpg|png|gif|JPG|PNG|GIF|xls|XLS';

 
    /* Slogan */
    /*$nametype = "slogan";
    $config['static'][$nametype]['title_main'] = "Slogan";
    $config['static'][$nametype]['tieude'] = true;*/

    /* Liên hệ */
    $nametype = "lienhe";
    $config['static'][$nametype]['title_main'] = "Liên hệ";
    $config['static'][$nametype]['noidung'] = true;
    $config['static'][$nametype]['noidung_cke'] = true;
 
    /* Footer *-/
    $nametype = "footer";
    $config['static'][$nametype]['title_main'] = "Footer";
    $config['static'][$nametype]['tieude'] = false;
    $config['static'][$nametype]['noidung'] = true;
    $config['static'][$nametype]['noidung_cke'] = true;
?>