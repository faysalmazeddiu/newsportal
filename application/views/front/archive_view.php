<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<div class="col-md-4 newsbox" style="height: 380px; background-color: #EDEDED;">
    <div class="title" style="margin-bottom: 10px;">আর্কাইভ</div>
    <div id="datepicker" style="padding-bottom: 10px;"></div>
    <input type="button" id="go" value="Go" style="width: 100px;">
</div>

<link href="<?php echo base_url(); ?>assets/front/jquery-ui/css/ui-lightness/jquery-ui-1.10.4.min.css" rel="stylesheet" type="text/css" />
<script src="<?php echo base_url(); ?>assets/front/jquery-ui/js/jquery-ui-1.10.4.min.js" type="text/javascript"></script>
<script>
    $(function() {
        $("#datepicker").datepicker({
            changeMonth: true,
            changeYear: true
        });
    });

    $("#go").click(function(e) {
        e.preventDefault();
        var date = $("#datepicker").datepicker("getDate");
        var year = date.getFullYear();
        var month = date.getMonth() + 1;
        var day = date.getDate();

        var date1 = year + '-' + month + '-' + day;
        window.location = "<?php echo base_url() ?>index.php/front/archive/" + date1;
    });
</script>

<style>
    .ui-datepicker {
        width : 100%;
    }

    .ui-widget-content {
        background: none;
        /*    border: 1px solid #DDDDDD;
            color: #333333;*/
    }

    .ui-widget-content {
        background: url("images/ui-bg_highlight-soft_100_eeeeee_1x100.png") repeat-x scroll 50% top #EEEEEE;
        border: 1px solid #DDDDDD;
        color: #333333;
    }
    .ui-widget-content a {
        color: #333333;
    }

    .ui-widget-header {
        background: none;
        border: none;
        color: #FFFFFF;
        background-color: #5D5550;
        font-weight: bold;
    }

    .ui-widget-header a {
        color: #FFFFFF;
    }
    .ui-state-default, .ui-widget-content .ui-state-default, .ui-widget-header .ui-state-default {
        /*    background: url("images/ui-bg_glass_100_f6f6f6_1x400.png") repeat-x scroll 50% 50% #F6F6F6;
            border: 1px solid #CCCCCC;*/
        color: inherit;
        /*font-weight: bold;*/
    }
    .ui-state-default a, .ui-state-default a:link, .ui-state-default a:visited {
        color: #1C94C4;
        text-decoration: none;
    }
    .ui-state-hover, .ui-widget-content .ui-state-hover, .ui-widget-header .ui-state-hover, .ui-state-focus, .ui-widget-content .ui-state-focus, .ui-widget-header .ui-state-focus {
        background: url("images/ui-bg_glass_100_fdf5ce_1x400.png") repeat-x scroll 50% 50% #FDF5CE;
        border: 1px solid #FBCB09;
        color: #C77405;
        font-weight: bold;
    }
    .ui-state-hover a, .ui-state-hover a:hover, .ui-state-hover a:link, .ui-state-hover a:visited, .ui-state-focus a, .ui-state-focus a:hover, .ui-state-focus a:link, .ui-state-focus a:visited {
        color: #C77405;
        text-decoration: none;
    }
    .ui-state-active, .ui-widget-content .ui-state-active, .ui-widget-header .ui-state-active {
        background: url("images/ui-bg_glass_65_ffffff_1x400.png") repeat-x scroll 50% 50% #FFFFFF;
        border: 1px solid #FBD850;
        color: #EB8F00;
        font-weight: bold;
    }
    .ui-state-active a, .ui-state-active a:link, .ui-state-active a:visited {
        color: #EB8F00;
        text-decoration: none;
    }
    .ui-state-highlight, .ui-widget-content .ui-state-highlight, .ui-widget-header .ui-state-highlight {
        background: url("images/ui-bg_highlight-soft_75_ffe45c_1x100.png") repeat-x scroll 50% top #FFE45C;
        border: 1px solid #FED22F;
        color: #363636;
    }
    .ui-state-highlight a, .ui-widget-content .ui-state-highlight a, .ui-widget-header .ui-state-highlight a {
        color: #363636;
    }
</style>

