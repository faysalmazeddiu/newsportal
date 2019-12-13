<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<div class="col-md-6 newsbox">
    <a href="<?php echo 'http://localhost/bdnews/index.php/front/category/' . $TYPE4[0]['name']; ?>" >
        <div class="title"><?php echo $TYPE4[0]['bangla_name']; ?></div>
    </a>
    <ul class="admission">
        <li> <?php echo anchor('front/detail/' . $TYPE4[1]['news_id'], $TYPE4[1]['shironam']); ?> </li>
        <li> <?php echo anchor('front/detail/' . $TYPE4[2]['news_id'], $TYPE4[2]['shironam']); ?> </li>
        <li> <?php echo anchor('front/detail/' . $TYPE4[3]['news_id'], $TYPE4[3]['shironam']); ?> </li>
        <li> <?php echo anchor('front/detail/' . $TYPE4[4]['news_id'], $TYPE4[4]['shironam']); ?> </li>
    </ul>
    <div class="bottom">
        <div class="holder"><a href="#">আরও</a></div>
    </div>
</div>

<style>
    .admission li {
        margin:0 0 10px 0;   
    }    
</style>

