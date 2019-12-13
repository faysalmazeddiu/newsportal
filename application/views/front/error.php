<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Error</title>
        <style type="text/css">
            h1 {
                font-size: 19px;
                font-weight: bold;
            }

            #container {
                padding: 30px;
                background-color: peachpuff;
            }

        </style>
    </head>
    <body>
        <div id="container">
            <h1><?php echo $message; ?></h1>
        </div>
    </body>
</html>

