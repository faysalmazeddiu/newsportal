<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<div class="col-md-4">
    <div class="container-fluid">
        <div class="row">
            <div class="newsbox">    
                <a href="<?php echo 'http://localhost/bdnews/index.php/front/category/' . $chobi[0]['name']; ?>">
                    <div class="title" style="margin-bottom: 3px;"><?php echo $chobi[0]['bangla_name']; ?></div>
                </a>

                <div id="chobir_kotha" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="active item">
                            <?php
                            // Preparing the first item index 0
                            $link = 'index.php/front/detail/' . $chobi[0]['news_id'];
                            $image = base_url() . "assets/uploads/news/" . $chobi[0]['image_file'];
                            $shironam = $chobi[0]['shironam'];
                            ?>
                            <a href="<?php echo $link; ?>">
                                <img src="<?php echo $image; ?>" />
                            </a>
                            <div class="carousel-caption"> <?php echo $shironam; ?> </div>
                        </div>

                        <?php
                        // Preparing the nest items index 1 to more
                        for ($i = 1; $i < sizeof($chobi); $i++) {
                            $link = 'index.php/front/detail/' . $chobi[$i]['news_id'];
                            $image = base_url() . "assets/uploads/news/" . $chobi[$i]['image_file'];
                            $shironam = $chobi[$i]['shironam'];
                            ?>
                            <div class="item">
                                <a href="<?php echo $link; ?>" class="zero">
                                    <img src="<?php echo $image; ?>" />
                                </a>
                                <div class="carousel-caption"><?php echo $shironam; ?></div>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                    <a class="left carousel-control" href="#chobir_kotha" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#chobir_kotha" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>    
</div>        

<style>
    .carousel-caption {
        position: relative;
        top:0px;
        right:0px;
        bottom: 20px;
        left:0px;
        z-index: 10;
        padding-top: 20px;
        padding-bottom: 20px;
        color: #000;
        text-align: center;
        text-shadow: none;
        background-color:#e0e0e0; opacity: 0.7; filter: alpha(opacity=90);
        overflow:hidden;
    }
    .carousel-control {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        width: 15%;
        font-size: 20px;
        color: #ffffff;
        text-align: center;
        text-shadow: none;
        opacity: 0.5;
        filter: alpha(opacity=50);
    }
    .carousel-control.left {
        background-image:none;
        background-image:none;
        background-image: none;
        background-image: none;
        background-repeat: none;
        filter: progid(none);
    }
    .carousel-control.right {
        right: 0;
        left: auto;
        background-image: none;
        background-image: none;
        background-image: none;
        background-image: none;
        background-repeat: none;
        filter: progid(none);
    }
</style>
