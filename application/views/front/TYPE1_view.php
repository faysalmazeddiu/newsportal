<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<div class="newsbox">
    <h2> <?php echo anchor('front/detail/' . $TYPE1[0]['news_id'], $TYPE1[0]['shironam']); ?> </h2>

    <?php
    if (!isset($TYPE1[0]['image_file'])) {
        $TYPE1[0]['image_file'] = NEWS_IMAGE_DEFAULT;
    }
    ?>

    <a href=<?php echo 'index.php/front/detail/' . $TYPE1[0]['news_id']; ?> >
        <img src="<?php echo NEWS_IMAGE_UPLOAD_PATH . $TYPE1[0]['image_file']; ?>" class="img-responsive small" />
    </a>

     <h4> <?php echo $TYPE1[0]['trailer']; ?> </h4>

    <div class="bottom">
        <!--<div class="comment"><i class="fa fa-comment-o"></i>10</div>-->
        <div class="holder">
            <?php echo anchor('front/detail/' . $TYPE1[0]['news_id'], 'বিস্তারিত'); ?>
        </div>
    </div>
</div>

