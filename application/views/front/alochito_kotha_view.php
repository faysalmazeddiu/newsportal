<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
 
<div class="newsbox alochito-kotha"> <!--CSS class alochito-kotha does nothing-->
    <div class="title"  style="margin-bottom: 10px;"> সম্পাদকীয় </div>
    <h4> <?php echo $alochito[0]['trailer']; ?> </h4>
    <div class="bottom">
        <div class="holder">
            <?php echo anchor('front/detail/' . $alochito[0]['news_id'], 'বিস্তারিত'); ?>
        </div>
    </div>
</div>
<br><br><br><br>
