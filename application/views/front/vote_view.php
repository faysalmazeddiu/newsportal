<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>assets/front/images/vote.jpg" title="bdtouchnews" class="img-responsive"></a>

<center>
    <form class='ajax-poll-form' tid='demo1' action='index.php/front/cast_vote' style="height: 365px; background-color: #ECEADD;">
        <div class='ajax-poll-title' style="margin-bottom: 10px;">
            <?php
            echo $vote[0]['topic'];
            ?>
        </div>

        <div class='ajax-poll-item' tid='yes'>
            <div class='ajax-poll-item-caption'>
                <input class='ajax-poll-item-radio' type='radio' name='_' />
                হ্যাঁ
            </div>
            <div class='ajax-poll-item-stats-box'>
                <div class='ajax-poll-item-bar'></div>
                <span class='ajax-poll-item-count'></span>
                <span class='ajax-poll-item-perc'></span>
            </div>
        </div>
        <div class='ajax-poll-item' tid='no'>
            <div class='ajax-poll-item-caption'>
                <input class='ajax-poll-item-radio' type='radio' name='_' />
                না
            </div>
            <div class='ajax-poll-item-stats-box'>
                <div class='ajax-poll-item-bar'></div>
                <span class='ajax-poll-item-count'></span>
                <span class='ajax-poll-item-perc'></span>
            </div>
        </div>
        <div class='ajax-poll-item' tid='none'>
            <div class='ajax-poll-item-caption'>
                <input class='ajax-poll-item-radio' type='radio' name='_' />
                মন্তব্য নেই
            </div>
            <div class='ajax-poll-item-stats-box'>
                <div class='ajax-poll-item-bar'></div>
                <span class='ajax-poll-item-count'></span>
                <span class='ajax-poll-item-perc'></span>
            </div>
        </div>
        <div class='ajax-poll-vote-box'>
            <input class='ajax-poll-btn-vote' type='button' value=" Vote " />
            <input class='ajax-poll-btn-view' type='button' value=" View " />
        </div>
        <div class='ajax-poll-back-box'>
            <input class='ajax-poll-btn-back' type='button' value=" &lt;&lt;&nbsp;Back " />
            <div class='ajax-poll-total-box'>
                <span class='ajax-poll-total-caption'>সর্বমোট:</span>
                <span class='ajax-poll-total-value'></span>
            </div>
        </div>

    </form>

</center>

<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vote/css/style.css" />
<style>
    .ajax-poll-title, .ajax-poll-item-caption{
        font-size: inherit;
    }
</style>

<script type="text/javascript" src="<?php echo base_url(); ?>assets/vote/js/vote.js"></script>


