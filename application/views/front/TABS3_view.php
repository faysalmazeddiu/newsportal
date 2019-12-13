<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<div class="col-md-4">
    <div class="container-fluid" id="tabs3" style="display: none;">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#abohawa" data-toggle="tab">আবহাওয়া</a></li>
            <li><a href="#sport" data-toggle="tab">Live Score Board</a></li>
        </ul>

        <div class="tab-content" style="border:1px solid #ccc; margin-bottom: 15px;">
            <div class="tab-pane active fixed-height3" id="abohawa">
                <div align="center">
                    <script src="http://www.weatherforecastmap.com/weather1000.php?zona=bangladesh_dhaka"></script>
                </div>
            </div>

            <div class="tab-pane fixed-height3" id="sport">
                <div align="center">
                    <script> app = "www.cricwaves.com";
                        mo = "1";
                        nt = "n";
                        wi = "0";
                        co = "2";
                        ad = "1";</script>
                    <script type="text/javascript" src="http://www.cricwaves.com/cricket/widgets/script/scoreWidgets.js"></script>
                </div>                        
            </div>
        </div>
    </div>
</div>

<style>
    .tab-content > .active {
        background:#fff;
    }

    .fixed-height3 {
        height: 400px; 
    }        
</style>


