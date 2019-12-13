<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<div class="cat-box">
    <h2 style="padding-bottom: 5px;"> <?php echo anchor('front/detail/' . $news_id, $shironam); ?> </h2>

    <?php
    if (!isset($image_file)) {
        $image_file = NEWS_IMAGE_DEFAULT;
    }
    $img = img(array('src' => NEWS_IMAGE_UPLOAD_PATH . $image_file, 'class' => 'img-responsive small'));
    echo anchor('front/detail/' . $news_id, $img);
    ?>

    <h4> <?php echo $trailer; ?> </h4>

    <div class="bottom" style="border-bottom: none;">
<!--        <div class="comment"><i class="fa fa-comment-o"></i>10</div> -->
        <div class="holder"> <?php echo anchor('front/detail/' . $news_id, 'বিস্তারিত'); ?> </div>
    </div>
</div>



