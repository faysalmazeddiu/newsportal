<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<div class="container-fluid">
    <div class="row">
        <ul id="shironam" style="display: none;">
            <?php
            foreach ($shironam as $row) {
                ?>
                <li><?php echo anchor('front/detail/' . $row['news_id'], $row['shironam']); ?></li>
                <?php
            }
            ?>
        </ul>
    </div>    
</div>    

<link href="<?php echo base_url(); ?>assets/front/newsticker/css/clean_red.css" rel="stylesheet" type="text/css" />
<script src="<?php echo base_url(); ?>assets/front/newsticker/js/newsticker.jquery.min.js" type="text/javascript"></script>

<script type="text/javascript"> /* SHIRONAM */
    (function($) {
        $(document).ready(function() {
            $('#shironam').newsticker({
                'style': 'reveal',
                'tickerTitle': 'শিরোনাম',
                'letterRevealSpeed': 70,
                'transitionSpeed': 2000,
                'pauseOnHover': false,
                'autoStart': true,
                'showControls': false
            });
        })
    })(jQuery);
</script>



