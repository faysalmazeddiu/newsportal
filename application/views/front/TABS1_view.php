<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<ul class="nav nav-tabs updown">
    <li class="active"><a href="#latest-news" data-toggle="tab">সর্বশেষ</a></li>
    <li><a href="#popular-news" data-toggle="tab">সর্বাধিক</a></li>
    <li><a href="#ajker-ukti" data-toggle="tab">আজকের উক্তি</a></li>
</ul>

<div class="tab-content"  style="border:1px solid #ccc; margin-bottom: 15px;" id="tabs1">
    <div class="tab-pane active fixed-height1" id="latest-news">
        <ul class="tooltip-demo">
            <?php
            foreach ($shorbo_shesh as $row) {
                ?>
                <li>
                    <a  href='<?php echo base_url() . "index.php/front/detail/" . $row['news_id']; ?>' class='tooltips' title='<?php echo $row['trailer']; ?>' ><?php echo $row['shironam']; ?></a>
                </li>
                <?php
            }
            ?>
        </ul>
    </div>
    <div class="tab-pane fixed-height1" id="popular-news">
        <ul class="tooltip-demo">
            <?php
            foreach ($shorbo_pothito as $row) {
                ?>
                <li>
                    <a  href='<?php echo base_url() . "index.php/front/detail/" . $row['news_id']; ?>' class='tooltips'title='<?php echo $row['trailer']; ?>'><?php echo $row['shironam']; ?></a>
                </li>
                <?php
            }
            ?>
        </ul>
    </div>

    <div class="tab-pane fixed-height1" id="ajker-ukti">
        <div class="row">
            <?php
            foreach ($ajker_ukti as $row) {
                ?>

                <blockquote> <i class="fa fa-quote-left"></i> <?php echo $row['content']; ?> <i class="fa fa-quote-right "></i> <br/>
                    <br/>
                    <br/>
                    --- <?php echo $row['by_whom']; ?>
                </blockquote>

                <?php
            }
            ?>

        </div>
    </div>
</div>

<style>
    .fixed-height1{
        height: 450px; 
    }

    .fixed-height1 li {
        margin-bottom: 0;  
        padding-bottom: 7px;
        list-style: square;
    }        

    .updown>li.active>a:after{
        font-family: FontAwesome;
        top:10;
        padding-left:06px;
        content: "\f0d7";
    }

    .updown > li > a:after{
        font-family: FontAwesome;
        top:10;
        padding-left:06px;
        content: "\f0d8";
    }    
</style>

<link href="<?php echo base_url(); ?>assets/front/tooltip/css/tool_tip.css" rel="stylesheet" type="text/css" />

<script src="<?php echo base_url(); ?>assets/front/tooltip/js/Ajaxtooltip.js"></script>
<script type="application/javascript"> // TOOLTIP
    $(function(){
    $('.tooltips').tooltipster({
    'animation': 'grow',
    'maxWidth': 350,
    'trigger': 'hover'
    });
    })
</script>
