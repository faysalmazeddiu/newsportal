<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<div class="flexslider" id="slider">
    <ul class="slides">
        <?php
        foreach ($slider_pics as $pic) {
            $image_file_location = base_url() . "assets/uploads/sliders/" . $pic['image_file'];
            ?>
            <li data-thumb="<?php echo $image_file_location; ?>">          
                <img src="<?php echo $image_file_location; ?>"/>
                <?php echo $pic['caption']; ?>
            </li>
        <?php } ?>
    </ul>
</div>

<style> 
    .flexslider {
        margin: 0px 0px 6px;
        background: none repeat scroll 0% 0% #FFF;
        border: 4px solid #FFF;
        position: relative;
        border-radius: 4px;
        box-shadow: 0px 1px 4px rgba(0, 0, 0, 0.2);
    }
</style>

<link href="<?php echo base_url(); ?>assets/front/flexslider/css/flexislider-demo.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url(); ?>assets/front/flexslider/css/flexslider.css" rel="stylesheet" type="text/css" />

<script src="<?php echo base_url(); ?>assets/front/flexslider/js/jquery.flexslider-min.js" type="text/javascript"></script>
<script type="text/javascript">
    $(window).load(function() {
        $('.flexslider').flexslider({
            animation: "slide",
            controlNav: "thumbnails",
            animationLoop: false,
            slideshow: true,
            start: function(slider) {
                $('body').removeClass('loading');
            }
        });
    });
    $('#carousel').flexslider({
        animation: "slide",
        controlNav: false,
        animationLoop: true,
        slideshow: true,
        itemWidth: 210,
        itemMargin: 5,
    });
</script>

