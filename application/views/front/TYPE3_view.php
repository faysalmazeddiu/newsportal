<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<div class="col-md-4 newsbox">
    <a href="<?php echo 'http://localhost/bdnews/index.php/front/category/' . $TYPE3[0]['name']; ?>">
        <div class="title"><?php echo $TYPE3[0]['bangla_name']; ?></div>
    </a>

    <h2><?php echo anchor('front/detail/' . $TYPE3[0]['news_id'], $TYPE3[0]['shironam']); ?></h2>

    <?php
    if (!isset($TYPE3[0]['image_file'])) {
        $TYPE3[0]['image_file'] = NEWS_IMAGE_DEFAULT;
    }
    ?>

    <a href=<?php echo 'index.php/front/detail/' . $TYPE3[0]['news_id']; ?> >
        <img src="<?php echo NEWS_IMAGE_UPLOAD_PATH . $TYPE3[0]['image_file']; ?>" class="img-responsive small" />
    </a>

    <h4><?php echo $TYPE3[0]['trailer']; ?></h4>

    <div class="bottom">
<!--        <div class="comment"><i class="fa fa-comment-o"></i>10</div>-->
        <div class="holder">
            <?php echo anchor('front/detail/' . $TYPE3[0]['news_id'], 'বিস্তারিত'); ?>
        </div>
    </div>
    <div class="bottom-line">
        <ul style="list-style-type: square;">
            <li> <h4> <?php echo anchor('front/detail/' . $TYPE3[1]['news_id'], $TYPE3[1]['shironam']); ?> </h4> </li>
            <li> <h4> <?php echo anchor('front/detail/' . $TYPE3[2]['news_id'], $TYPE3[2]['shironam']); ?> </h4> </li>
            <li> <h4> <?php echo anchor('front/detail/' . $TYPE3[3]['news_id'], $TYPE3[3]['shironam']); ?> </h4> </li>
            <li> <h4> <?php echo anchor('front/detail/' . $TYPE3[4]['news_id'], $TYPE3[4]['shironam']); ?> </h4> </li>            
        </ul>
    </div>
    <div class="bottom">
        <div class="holder"><a href="<?php echo 'http://localhost/bdnews/index.php/front/category/' . $TYPE3[0]['name']; ?>">আরও</a></div>
    </div>
</div>

