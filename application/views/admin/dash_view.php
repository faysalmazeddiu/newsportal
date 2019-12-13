<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <?php if (isset($css_files)) foreach ($css_files as $file): ?>
                <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
            <?php endforeach; ?>
        <link rel="shortcut icon" href="<?php echo base_url().'/favicon.jpg';?>"/>

        <title>Protidin24 Admin</title>

        <link href="<?php echo base_url(); ?>assets/front/css/bootstrap.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/front/css/dashboard.css" rel="stylesheet">    

        <style>
            *, html, body {
                font-family:SolaimanLipi,Arial,Vrinda,"Siyam Rupali",sans-serif;
                font-size:14px;
                line-height:1.5;
                vertical-align: baseline;
                font-weight: normal;
                text-spacing: normal;
                font-stretch: normal;
                border: 0 none;
                outline: 0;
                padding: 0;
                margin: 0;
            }

            body{
                padding-top: 50px;
            }

            a{
                color: black;
            }

            li{
                padding-bottom: 5px;
            }

            .groceryCrudTable tfoot tr th input[type="text"], .datatables div.form-div input[type="text"], .datatables div.form-div select, .datatables div.form-div textarea {
                font-family: inherit;
                font-weight: normal;
                line-height: normal;
            }            
        </style>

    </head>

    <body  style=" overflow-x: hidden;">
        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo base_url(); ?>index.php/admin/manage/grid">Protidin24 Admin</a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><?php echo anchor("admin/logout", "Logout"); ?></li>
                    </ul>
                    <!--                    <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
                                        </form>-->
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-3 col-md-2 sidebar">
                    <ul class="nav-sidebar">
                        <?php echo $menu; ?>
                    </ul>
                </div>
                <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                    <?php echo $grid; ?>
                </div>
            </div>
        </div>

        <script src="<?php echo base_url(); ?>assets/front/js/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/front/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/front/js/docs.min.js"></script>

        <?php if (isset($js_files)) foreach ($js_files as $file): ?>
                <script src="<?php echo $file; ?>"></script>
            <?php endforeach; ?>

        <script> /* This script is used when we click on the submit button to save SITE CONFIG form */
            $(".submit").click(function(e) {
                e.preventDefault();
                var values = $('#myform').serialize();
                $.ajax({
                    type: "POST",
                    data: values,
                    url: "config_save/",
                    success: function(result) {
                        //$(".submit").attr('disabled', true);
                        document.location.reload(true);
                    }
                });
            });
            
            $(".clear_cache").click(function(e) {
                e.preventDefault();
                $.ajax({
                    type: "POST",
                    url: "_clear_cache",
                    success: function(result) {
                    }
                });
            });            
        </script>                                                   

    </body>
</html>

