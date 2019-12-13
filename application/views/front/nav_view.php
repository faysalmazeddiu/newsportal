<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<style type="text/css">
    .dropdown-menu {
        min-width: 200px;
    }
    
    .dropdown-menu.columns-3 {
        min-width: 600px;
    }
    
    .dropdown-menu.columns-6 {
        min-width: 800px;
    }
    .dropdown-menu li a {
        padding: 5px 15px;
        font-weight: 300;
    }
    .multi-column-dropdown {
        list-style: none;
    }
    .multi-column-dropdown li a {
        display: block;
        clear: both;
        line-height: 1.428571429;
        color: #333;
        white-space: normal;
    }
    .multi-column-dropdown li a:hover {
        text-decoration: none;
        color: #fff;
        background-color: #000;
    }

    @media (max-width: 767px) {
        .dropdown-menu.multi-column {
            min-width: 240px !important;
            overflow-x: hidden;
        }
    }

    @media (max-width: 480px) {
        .content {
            width: 90%;
            margin: 50px auto;
            padding: 10px;
        }
    }

    /* Below are my changes */
    /************************/
    #menuMega ul{ 
        width: 101.3%;
        background-color: #333333;        
    }

    #menuMega .nav > li > a { /* Padding between texts on main menu */
        padding: 10px 12px;
    }    

    #menuMega.navbar-default .navbar-nav > li > a { /* main menu */
        background: none repeat scroll 0 0 #333333;
        color: white;
        font-size: 17px;
    }    

    #menuMega.navbar-default .navbar-nav > li > a:hover{  /* main menu */
        background-color: black;
    }

    #menuMega li a{ /* dropdown menu */
        color: white;
        background-color: #333333;    
        font-size: inherit;
    } 

    #menuMega li a:hover{ /* dropdown menu */
        background-color: black;
    }        

    #menuMega .navbar-collapse{ /* main menu moves right otherwise */
        padding-left: 0;
    }

    #menuMega .nav { /* there is some line in the bottom otherwise */
        margin-bottom: 0;
    }
    
    #menuMega{
        z-index: 1000;
    }
</style>

<nav class="navbar navbar-default" role="navigation" id="menuMega">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>
    <!--<div class="container">-->

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"><!-- This div will collapse on a mobile browser -->
        <ul class="nav navbar-nav">
            <!--No drop downs-->
            <li><a href="<?php echo base_url(); ?>"><i class="fa fa-white fa-home fa-2x"></i></a></li>
            <li><a href="<?php echo base_url(); ?>index.php/front/category/jatio">জাতীয়</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/front/category/rajniti">রাজনীতি</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/front/category/orthoniti">অর্থনীতি</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/front/category/antarjatik">আন্তর্জাতিক</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/front/category/kheladhula">খেলাধুলা</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/front/category/durghatana">সারাদেশ</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/front/category/binodon">বিনোদন</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/front/category/shikkhangan">শিক্ষাঙ্গন</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/front/category/biggan">বিজ্ঞান ও তথ্যপ্রযুক্তি</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/front/category/bdtouch_blog">মতপার্থক্য</a></li>
            <!--No drop downs-->

            <li class="dropdown"><!--More (Arou) links drop down-->
                <a href="#" class="dropdown-toggle js-activated" data-toggle="dropdown">আরও<i class="fa fa-white fa-caret-down"></i> </a>
                <ul class="dropdown-menu multi-column columns-3 pull-right">
                    <div class="row">
                        <div class="col-sm-4">
                            <ul class="multi-column-dropdown">
                    <li><a href="<?php echo base_url(); ?>index.php/front/category/shasto">স্বাস্থ্য</a></li>
                    <li><a href="<?php echo base_url(); ?>index.php/front/category/probash">প্রবাস</a></li>
                    <li><a href="<?php echo base_url(); ?>index.php/front/category/life_style">লাইফস্টাইল</a></li>
                    <li><a href="<?php echo base_url(); ?>index.php/front/category/oporadh">অপরাধ</a></li>                                
                    <li><a href="<?php echo base_url(); ?>index.php/front/category/vromon">ভ্রমন</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-4">
                            <ul class="multi-column-dropdown">
                    <li><a href="<?php echo base_url(); ?>index.php/front/category/adalat">আইনঅঙ্গণ</a></li>
                    <li><a href="<?php echo base_url(); ?>index.php/front/category/shompadokio">সম্পাদকীয়</a></li>
                    <li><a href="<?php echo base_url(); ?>index.php/front/category/media">মিডিয়া</a></li>
                    <li><a href="<?php echo base_url(); ?>index.php/front/category/nari_o_shishu">নারী ও শিশু</a></li>                    
                            </ul>
                        </div>
                        <div class="col-sm-4">
                            <ul class="multi-column-dropdown">
                    <li><a href="<?php echo base_url(); ?>index.php/front/category/rannaghar">রান্নাঘর</a></li>
                    <li><a href="<?php echo base_url(); ?>index.php/front/category/jibon_sangram">জীবন সংগ্রাম</a></li>
                    <li><a href="<?php echo base_url(); ?>index.php/front/category/rohosshomoi_prithibi">রহস্যময় পৃথিবী</a></li>
                    <li><a href="<?php echo base_url(); ?>index.php/front/category/bdtouch_special">বিশেষ প্রতিবেদন</a></li>
                            </ul>
                        </div>                        
                    </div>
                </ul>
            </li><!--More (Arou) links drop down-->

            <li class="dropdown"><!--Newspaper links drop down-->
                <a href="#" class="dropdown-toggle js-activated" data-toggle="dropdown">পত্রিকা লিংক&nbsp;<i class="fa fa-white fa-caret-down"></i></a>
                <ul class="dropdown-menu multi-column columns-6 pull-right">
                    <div class="row">
                        <div class="col-sm-2">
                            <ul class="multi-column-dropdown">
                                <li><a href="http://www.bbc.co.uk/bengali" target="_blank">বিবিসি</a></li>
                                <li><a href="http://www.cnn.com"           target="_blank">সিএনএন</a></li>
                                <li><a href="http://www.reuters.com" target="_blank">রয়টার্স</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-2">
                            <ul class="multi-column-dropdown">
                                <li><a href="http://www.afp.com/afpcom/en" target="_blank">এএফপি</a></li>
                                <li><a href="http://www.voanews.com/bangla/news/" target="_blank">ভোআ</a></li>
                                <li><a href="http://www.dw-world.de/bengali" target="_blank">ডয়েচেভেলে</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-2">
                            <ul class="multi-column-dropdown">
                                <li><a href="http://www.prothomkotha.com" target="_blank">প্রথমকথা</a></li>
                                <li><a href="http://www.bd-pratidin.com/" target="_blank">বাংলাদেশ প্রতিদিন</a></li>
                                <li><a href="http://www.prothom-alo.com" target="_blank">প্রথম আলো</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-2">
                            <ul class="multi-column-dropdown">
                                <li><a href="http://ittefaq.com.bd" target="_blank">ইত্তেফাক</a></li>
                                <li><a href="http://www.samakal.com.bd" target="_blank">সমকাল</a></li>
                                <li><a href="http://www.mzamin.com/" target="_blank">মানবজমিন</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-2">
                            <ul class="multi-column-dropdown">
                                <li><a href="http://www.dailyjanakantha.com" target="_blank">জনকণ্ঠ</a></li>
                                <li><a href="http://www.bonikbarta.com/" target="_blank">বণিক বার্তা</a></li>
                                <li><a href="http://www.bhorerkagoj.net" target="_blank">ভোরের কাগজ</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-2">
                            <ul class="multi-column-dropdown">
                                <li><a href="http://www.kalerkantho.com" target="_blank">কালেরকণ্ঠ</a></li>
                                <li><a href="http://www.anandabazar.com/" target="_blank">আনন্দবাজার</a></li>
                                <li><a href="http://linkbd.net/" target="_blank">অন্যান্য</a></li>
                            </ul>
                        </div>
                    </div><!--<div class="row">-->
                </ul><!--<ul class="dropdown-menu multi-column columns-6 pull-right">-->
            </li><!--Newspaper links drop down-->
        </ul><!--<ul class="nav navbar-nav">-->
    </div><!--<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">-->
</nav>

<script src="<?php echo base_url(); ?>assets/front/bootstrap/bootstrap-hover-dropdown.js"></script>
<script>
    $(document).ready(function() {
        $('.js-activated').dropdownHover().dropdown();
    });
</script>

<script>
    $(document).ready(function() {
        var sticky_navigation_offset_top = $('#menuMega').offset().top;
        var sticky_navigation = function() {
            var scroll_top = $(window).scrollTop();
            if (scroll_top > sticky_navigation_offset_top) {
                $('#menuMega').css({'position': 'fixed',
                    'top': 0,
                    'left': 0,
                    'padding': '0 0 0 63px',
                    'margin': '0',   
                    'color': 'white',
                    'background-color': '#333333',
                    'width': '100%'
                });
            } else {
                $('#menuMega').css({'position': 'relative',
                    'padding': '0px'
                });
            }
        };

        sticky_navigation();

        $(window).scroll(function() {
            sticky_navigation();
        });

        $('a[href="#"]').click(function(event) {
            event.preventDefault();
        });

        $('.js-activated').dropdownHover().dropdown();

    });
</script>

