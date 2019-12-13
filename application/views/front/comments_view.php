<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
$news_id = $this->uri->segment(3, 0);
?>

<div class="cmt-container" >
    <?php foreach ($comments as $row) { ?>
        <div class="cmt-cnt">
            <img src="<?php echo base_url(); ?>assets/comments/img/profile-img.jpg" />
            <div class="thecom">
                <h5><?php echo $row['name']; ?></h5><span data-utime="1371248446" class="com-dt"><?php echo $row['ts']; ?></span>
                <br/>
                <p>
                    <?php echo $row['content']; ?>
                </p>
            </div>
        </div>
    <?php } ?>

    <div class="new-com-bt">
        <span>Write a comment ...</span>
    </div>

    <div class="new-com-cnt">
        <input type="text" id="name-com" name="name-com" value="" placeholder="Your name" />
        <input type="text" id="mail-com" name="mail-com" value="" placeholder="Your e-mail adress" />
        <textarea class="the-new-com"></textarea>
        <div class="bt-add-com">Post comment</div>
        <div class="bt-cancel-com">Cancel</div>
    </div>
    <div class="clear"></div>

</div>

<style>
    .cmt-container {
        padding-top: 0;
        /*margin: 0;*/
    }
</style>

<link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>assets/comments/css/example.css" />

<script>
    $(document).ready(
            function() {
                $('.new-com-bt').click(function(event) {
                    $(this).hide();
                    $('.new-com-cnt').show();
                    $('#name-com').focus();
                });

                /* when start writing the comment activate the "add" button */
                $('.the-new-com').bind('input propertychange', function() {
                    $(".bt-add-com").css({opacity: 0.6});
                    var checklength = $(this).val().length;
                    if (checklength) {
                        $(".bt-add-com").css({opacity: 1});
                    }
                });

                /* on clic  on the cancel button */
                $('.bt-cancel-com').click(function() {
                    $('.the-new-com').val('');
                    $('.new-com-cnt').fadeOut('fast', function() {
                        $('.new-com-bt').fadeIn('fast');
                    });
                });

                // on post comment click
                $('.bt-add-com').click(function() {
                    var theCom = $('.the-new-com');
                    var theName = $('#name-com');
                    var theMail = $('#mail-com');

                    if (!theCom.val()) {
                        alert('You need to write a comment!');
                    } else {
                        $.ajax({
                            type: "POST",
                            url: "<?php echo base_url() ?>index.php/front/addcomment",
                            data: 'act=add-com'
                                    + '&news_id=' + <?php echo $news_id; ?>
                            + '&content=' + theCom.val()
                                    + '&name=' + theName.val()
                                    + '&email=' + theMail.val(),
                            success: function(html) {
                                theCom.val('');
                                theMail.val('');
                                theName.val('');
                                $('.new-com-cnt').hide('fast', function() {
                                    $('.new-com-bt').show('fast');
                                    $('.new-com-bt').before(html);
                                })
                            }
                        });
                    }
                });

            }
    );
</script>



