<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<div class="container-fluid">
    <div class="row">
        <div class="alert fade in">
            <div class="breaking-news" id="breaking-news" style="display: none;">
                <ul>
                    <?php
                    foreach ($breaking_news as $row) {
                        ?>
                        <li><?php echo anchor('front/detail/' . $row['news_id'], $row['shironam']); ?></li>
                        <?php
                    }
                    ?>
                </ul>
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            </div>
        </div>    
    </div>        
</div>            

<script src="<?php echo base_url(); ?>assets/front/easyticker/easyticker.js" type="text/javascript"></script>

<script type="text/javascript"> // BREAKING NEWS
    $(document).ready(function(){
        var dd = $('.breaking-news').easyTicker({
            direction: 'up',
            easing: 'easeInOutBack',
            speed: 'slow',
            interval: 2000,
            height: 'auto',
            visible: 1,
            mousePause: 0,
            controls: {
                up: '.up',
                down: '.down',
                toggle: '.toggle',
                stopText: 'Stop !!!'
            }
        }).data('easyTicker');
    });
</script>    





