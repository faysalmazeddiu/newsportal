<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<!doctype html>
<html lang="en">
    <head>
    </head>

    <body>
        <?php 
            foreach($search as $row)
                echo($row['highlighted'])."<BR/><BR/>"; 
            ?>
    </body>
    
    <style>
        .highlight{
            background-color: yellow;
        }
    </style>
</html>
