<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<style>    
    #slideleft{
        z-index: 1100;
    }
</style>

<!DOCTYPE HTML>
<html>
    <?php echo $head; ?>


    <body style="overflow-x: hidden;">
        <div class="container">
            <?php if (LOGREG) echo $registration; ?>
            <?php echo $logo; ?>
            <div class="container-fluid">            
                <div class="row">
                    <div class="col-md-4 date" style="width: 850px;"><?php echo $dt; ?></div>
                    <?php if (SEARCH) echo $search; ?>
                </div>
            </div>                

            <?php echo $navigation; ?>

            <?php
            if (BREAKING_NEWS)
                echo $breaking_news;
            ?>

            <?php
            if (SHIRONAM)
                echo $shironam;
            ?>

            <?php
            if (isset($content)) {
                $this->load->view($content);
            } else {
                $temp['message'] = SORRY_NOTHING_FOUND;
                $this->load->view('front/error', $temp);
            }
            ?>
            <?php echo $footer; ?>
        </div>
        
    <?php if (SOCIAL) {
        ?>
        <!-- Go to www.addthis.com/dashboard to customize your tools -->
        <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-53b7db94769ec3af"></script>
        <table id="slideleft" style=" overflow:auto; position:fixed; top:25%;"><tr class="slideLeftItem" style="position:fixed;left:-320px;z-index:1000;height:100%;"><td><img src="https://lh3.googleusercontent.com/-GMJe-Am-U9Q/T4p4bZu7jDI/AAAAAAAAAFs/qQqmMGn-wwg/s800/facebook-vertical.png" style="top:5px; position:absolute; border-left-width:5px; left:318px;"/></td><td class="contentBox" style="border:solid 5px #5370AD; width:300px;height:300px;position:relative;border-radius:5px;background-color:white;"><div id="fb-root"></div><script type="text/javascript" >(function() {var e = document.createElement('script'); e.async = true;e.src = document.location.protocol +'//connect.facebook.net/en_US/all.js#xfbml=1';document.getElementById('fb-root').appendChild(e);}());</script><fb:like-box href="https://www.facebook.com/protidin24news" width="300" show_faces="true" stream="false" header="false"></fb:like-box></td></tr><tr class="slideLeftItem"  style="position:fixed;left:-320px;z-index:1000;height:100%;"><td><img src="https://lh3.googleusercontent.com/-9lxEyInmdU4/T4p4bfb7luI/AAAAAAAAAFk/6NvygQsqtcg/s800/twitter-veritcal.png" style="top:100px; position:absolute; border-left-width:5px; left:318px;"/></td><td class="contentBox" style="border:solid 5px #44CCF6; width:300px;height:300px;position:relative;border-radius:5px;background-color:white;"><div style="background: #F5FCFE;"><script charset="utf-8" src="http://widgets.twimg.com/j/2/widget.js"></script><script type="text/javascript" >new TWTR.Widget({version: 2,  type: 'profile',  rpp: 4,  interval: 30000,  width: 'auto',  height: 300,  theme: {shell: {      background: '#44ccf6',      color: '#000000'    },    tweets: {      background: '#ffffff',color: '#000000',      links: '#44ccf6'    }  },features: {    scrollbar: false,    loop: false,    live: false,    behavior: 'all'  }}).render().setUser('BdTouchNews').start();</script></div></td></tr><tr class="slideLeftItem"  style="position:fixed;left:-320px;z-index:1000;height:100%;"><td><img src="https://lh3.googleusercontent.com/-W-DLwbCICFo/T4p4brnipyI/AAAAAAAAAF4/DleKifFKHW8/s800/google-plus-vertical.png" style="top:195px; position:absolute; border-left-width:5px; left:318px;"/></td><td class="contentBox" style="border:solid 5px black; width:300px;height:300px;position:relative;border-radius:5px;background-color:white;"><div class="googleplus" style="background: #F5FCFE;"><script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script><g:plus href="https://plus.google.com/u/0/114196907756217838695" size="badge"></g:plus><script type="text/javascript">gapi.plus.go();</script></div></td></tr></table><script type="text/javascript">jQuery(".slideLeftItem").append('');jQuery("#slideleft tr").hover(function(b){var a=jQuery(this);jQuery("#slideleft tr").not(a).hide();a.css({"z-index":"9999"});a.stop().animate({left:0})},function(b){var a=jQuery(this);a.css({"z-index":"1000"});a.stop().animate({left:-a.outerWidth()});jQuery("#slideleft tr").show()});</script>                
    <?php };  ?>

    </body>
</html>


