<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 hidden-xs hidden-sm sign">
            <?php
           /* if (ON_TEST)
                echo "পরিক্ষামুলক&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
         */   ?>
            <a class="banglafont" href="<?php echo base_url(); ?>index.php/front/page/nobangla">বাংলা ফন্ট দেখতে...</a>
            <a href="#login" data-toggle="modal">Log in</a> | <a href="#register" data-toggle="modal"> Registration</a>
        </div>
    </div>                        
</div>                        

<!-- Modal -->
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="slimdes">
            <div class="content">
                <div class="banner">
                    <h2>Sign In</h2>
                </div>
                <div class="content-main">
                    <div class="container clearfix alpha">      
                        <div class="grid_6">
                            <form method="post">
                                <div class="grid_3 alpha omega">
                                    <label for="eee">Email Address</label>
                                </div>
                                <div class="clear"></div>
                                <div class="grid_3 login-m relative alpha">
                                    <i class=" fa fa-envelope"></i>
                                    <input id="email" name="email" value="" size="30" required="" type="text">
                                </div>

                                <div class="clear"></div>
                                <div class="mb20"></div>

                                <div class="grid_3 alpha omega">
                                    <label for="password">Password</label>
                                </div>
                                <div class="clear"></div>
                                <div class="grid_3 login-p relative alpha">
                                    <i class="fa fa-lock"></i>
                                    <input id="password" name="password" size="30" required="" type="password">
                                </div>
                                <div class="grid_3 omega">
                                    <div id="password_err" class="hide"></div>
                                </div>
                                <div class="clear"></div>
                                <div class="mb10"></div>

                                <p class="mb30">

                                    <input type="submit" class="btn btn-primary" value="Sign in"/>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </p>
                                <p class="mb0">

                                </p>
                            </form>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="slimdes">
            <div class="content">
                <div class="banner">
                    <h2>Registration</h2>
                </div>
                <div class="content-main">
                    <div class="container clearfix alpha">      
                        <div class="grid_6">
                            <form method="post">
                                <div class="grid_3 alpha omega">
                                    <label for="eee">Username</label>
                                </div>
                                <div class="clear"></div>

                                <div class="grid_3 login-m relative alpha">
                                    <i class=" fa fa-user"></i>
                                    <input id="username" name="username" value="" size="30" required="" type="text">
                                </div>

                                <div class="clear"></div>
                                <div class="mb20"></div>

                                <div class="grid_3 alpha omega">
                                    <label for="eee">Email Address</label>
                                </div>
                                <div class="clear"></div>

                                <div class="grid_3 login-m relative alpha">
                                    <i class=" fa fa-envelope"></i>
                                    <input id="email" name="email" value="" size="30" required="" type="text">
                                </div>

                                <div class="clear"></div>
                                <div class="mb20"></div>

                                <div class="grid_3 alpha omega">
                                    <label for="password">Password</label>
                                </div>
                                <div class="clear"></div>
                                <div class="grid_3 login-p relative alpha">
                                    <i class="fa fa-lock"></i>
                                    <input id="password" name="password" size="30" required="" type="password">
                                </div>
                                <div class="grid_3 omega">
                                    <div id="password_err" class="hide"></div>
                                </div>
                                <div class="clear"></div>
                                <div class="mb10"></div>
                                <p class="mb30">
                                    <input type="submit" class="btn btn-primary" value="Sign in"/>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </p>
                                <p class="mb0">
                                </p>
                            </form>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .banner {
        background-color:#F2F2F2;
        background-position:initial initial;
        background-repeat:initial initial;
        border-color:#D4D4D4 #D4D4D4 #E4E4E4;
        border-style:solid;
        border-top-left-radius:5px;
        border-top-right-radius:5px;
        border-width:1px;
        margin:0;
        padding:25px 40px;
        position:relative;
        width:400px;	
    }

    .banner .bnrmsg {
        position:absolute;
        right:30px;
        top:32px;
    }

    .content-main {
        background-color:#FFFFFF;
        background-position:initial initial;
        background-repeat:initial initial;
        border-bottom-color:#D4D4D4;
        border-bottom-left-radius:5px;
        border-bottom-right-radius:5px;
        border-bottom-style:solid;
        border-bottom-width:1px;
        border-left-color:#D4D4D4;
        border-left-style:solid;
        border-left-width:1px;
        border-right-color:#D4D4D4;
        border-right-style:solid;
        border-right-width:1px;
        padding:20px 30px 40px;
        width:400px;	
    }
    .banglafont{color:red;padding-right:20px;}
</style>
