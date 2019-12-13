<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

        <title>Protidin24 Admin Login</title>

        <link href="<?php echo base_url(); ?>assets/front/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/front/css/signin.css" rel="stylesheet">

    </head>

    <body>
        <div class="container">

            <form class="form-signin" role="form" method="post">
                <h2 class="form-signin-heading">Login required</h2>
                <input                  name="username" id="u" class="form-control" placeholder="Username" required autofocus>
                <input type="password"  name="password" id="p" class="form-control" placeholder="Password" required>
                <button type="submit" class="btn btn-lg btn-primary btn-block" >Login</button>
                <div class="alert alert-danger">
                    <?php
                    if ($this->session->flashdata('error')) {

                        echo $this->session->flashdata('error');
                    }
                    ?>          

                </div>
            </form>

        </div>
    </body>
</html>
