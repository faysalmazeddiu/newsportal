<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<div class="row" style="margin-bottom: 25px;">
    <div class="col-md-8">
        <?php
        if (!isset($detail[0]['image_file'])) {
            $detail[0]['image_file'] = NEWS_IMAGE_DEFAULT;
        }
        ?>
        <img src="<?php echo base_url() . NEWS_IMAGE_UPLOAD_PATH . $detail[0]['image_file']; ?>" class="img-responsive news_detail_image" style="float:left">

        <h4 style="padding-bottom: 25px;">            
            <pre>
                <h2 style="margin-top: -20px;"><?php echo $detail[0]['shironam']; ?> </h2>
                <?php echo $detail[0]['content']; ?>
            </pre>
        </h4>

								<!-- Go to www.addthis.com/dashboard to customize your tools -->
								<div class="addthis_sharing_toolbox"></div>
        <?php echo $comments; ?>

        <h2 style="margin-bottom: 10px;"> এই বিভাগের আরো খবর</h2>

        <?php
        if (isset($category))
            foreach ($category as $row) {
                echo $row;
                ?>
                <div style="padding-bottom: 15px;"></div>
                <?php
            } else {
            $temp['message'] = SORRY_NOTHING_FOUND;
            $this->load->view('front/error', $temp);
        }
        ?>
    </div>
    <div class="col-md-4">
        <?php echo $TABS1; ?>
    </div>
</div>
		<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-53b7db94769ec3af"></script>

