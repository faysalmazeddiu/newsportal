<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<style>
    label {

        font-size: 10px !important;
    }

    .form-control
    {
        font-size: 12px !important;
        height: 28px !important;
        margin-bottom: 3px;

    }

    .col-sm-5, .col-sm-7{
        padding-left: 0 !important;
        padding-right: 2px !important;
    }

    .col-sm-12
    {
        margin: 0 !important;
        padding: 0 !important;

    }

    .form-group
    {
        margin: 0 !important;
        padding: 0 !important;

    }
</style>

<div class="row">    

    <form id="myform" role="form" class="form-inline"  action='test/save/' method="post">

        <div class="col-md-12" style="padding: 10px;">                   

            <button type='submit' class="btn btn-default submit">Save Changes</button>
            <button type='clear_cache' class="btn btn-default submit">Clear Cache</button>

            <!--<button type='button' class="btn btn-default reload">Reload</button>-->
        </div>


        <div class="col-md-2">  <!-- COL1   -->
            <?php
            foreach ($constants as $name => $value) {
                if ($value[0] == 'COL1') {
                    echo "<div class='form-group col-sm-12'>";

                    if ($value[2] == 'on') {
                        echo "<input  type='checkbox'  name=$name  class='checkbox'  checked>";
                        echo "<label  for=$name  class='control-label'>$name</label>";
                    } else {
                        echo "<input  type='checkbox'  name=$name  class='checkbox'>";
                        echo "<label  for=$name  class='control-label'>$name</label>";
                    }
                    echo "</div>";
                }
            }
            ?>
        </div>

        <div class="col-md-5">    <!-- COL2   -->
            <?php
            foreach ($constants as $name => $value) {
                if ($value[0] == 'COL2') {
                    echo "<div class='form-group col-sm-12'>";
                    switch ($value[1]) {
                        case 'text':
                            echo "<div  class='col-sm-5'>";
                            echo "<input  type='text'  name=$name  class='form-control'  value=$value[2]>";
                            echo "</div>";
                            echo "<label  for=$name  class='col-sm-7 control-label'>$name</label>";
                            break;
                    }
                    echo "</div>";
                }
            }
            ?>                    
        </div>

        <div class="col-md-5">    <!-- COL3   -->
            <?php
            foreach ($constants as $name => $value) {
                if ($value[0] == 'COL3') {
                    echo "<div class='form-group col-sm-12'>";
                    switch ($value[1]) {
                        case 'text':
                            echo "<div  class='col-sm-7'>";
                            echo "<input  type='text'  name=$name  class='form-control'  value=$value[2]>";
                            echo "</div>";
                            echo "<label  for=$name  class='col-sm-5 control-label'>$name</label>";
                            break;

                        case 'textarea':
                            echo "<div  class='col-sm-7'>";
                            echo "<textarea  name=$name  class='form-control'  rows=$value[3]  cols=$value[4]>$value[2]</textarea>";
                            echo "</div>";
                            echo "<label  for=$name  class='col-sm-5 control-label'>$name</label>";
                    }
                    echo "</div>";
                }
            }
            ?>                    
        </div>
    </form>  
</div>     





