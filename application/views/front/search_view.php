<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<div class="col-md-3" style="float: right; margin-right: -15px;">
    <form method="post" action="<?php echo base_url(); ?>index.php/front/search">
        <div class="input-group search-form ">
            <input type="text" class="form-control" name="search">
            <span class="input-group-btn">
                <button class="btn btn-default" type="submit"><i class="fa fa-search"></i>&nbsp;অনুসন্ধান</button>
            </span>
        </div>
    </form>
</div>
