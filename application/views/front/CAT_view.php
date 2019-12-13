<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<div class="row" style="margin-bottom: 25px;">
    <div class="col-md-8">
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

<!--                                <center>
<ul class="pagination">
<li><a href="#">&laquo;</a></li>
<li><a href="#">1</a></li>
<li><a href="#">2</a></li>
<li><a href="#">3</a></li>
<li><a href="#">4</a></li>
<li><a href="#">5</a></li>
<li><a href="#">&raquo;</a></li>
</ul>
</center> -->

    </div>
    <div class="col-md-4">
        <?php echo $TABS1; ?>
    </div>
</div>

