<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<div class="rashifal cat-box" id="rashifal">
    <div class="row">
        <div class="col-md-3 col-xs-3"><a class="rashi" href="kumbho">  <img src="<?php echo base_url(); ?>assets/front/images/rashi/aquarius.jpg"      tilte="kumvo"/><span class="rashiName">কুম্ভ</span></a></div>
        <div class="col-md-3 col-xs-3"><a class="rashi" href="mesh">    <img src="<?php echo base_url(); ?>assets/front/images/rashi/aries.jpg"         tilte="mesh"/><span class="rashiName">মেষ</span></a></div>
        <div class="col-md-3 col-xs-3"><a class="rashi" href="korkot">  <img src="<?php echo base_url(); ?>assets/front/images/rashi/cancer.jpg"        tilte="korkot"/><span class="rashiName">কর্কট</span></a></div>
        <div class="col-md-3 col-xs-3"><a class="rashi" href="mokor">   <img src="<?php echo base_url(); ?>assets/front/images/rashi/capricorn.jpg"     tilte="mokor"/><span class="rashiName">মকর</span></a></div>
    </div>
    <div class="row">
        <div class="col-md-3 col-xs-3"><a class="rashi" href="mithun">  <img src="<?php echo base_url(); ?>assets/front/images/rashi/gemini.jpg"        tilte="mithun"/><span class="rashiName">মিথুন</span></a></div>
        <div class="col-md-3 col-xs-3"><a class="rashi" href="shingho"> <img src="<?php echo base_url(); ?>assets/front/images/rashi/leo.jpg"           tilte="shingho"/><span class="rashiName">সিংহ</span></a></div>
        <div class="col-md-3 col-xs-3"><a class="rashi" href="tula">    <img src="<?php echo base_url(); ?>assets/front/images/rashi/libra.jpg"         tilte="tula"/><span class="rashiName">তুলা</span></a></div>
        <div class="col-md-3 col-xs-3"><a class="rashi" href="meen">    <img src="<?php echo base_url(); ?>assets/front/images/rashi/pisces.jpg"        tilte="meen"/> <span class="rashiName">মীন</span></a></div>
    </div>
    <div class="row">
        <div class="col-md-3 col-xs-3"><a class="rashi" href="dhonu">       <img src="<?php echo base_url(); ?>assets/front/images/rashi/sagittarius.jpg"   tilte="dhonu"/><span class="rashiName">ধনু</span></a></div>
        <div class="col-md-3 col-xs-3"><a class="rashi" href="bristchik">   <img src="<?php echo base_url(); ?>assets/front/images/rashi/scorpio.jpg"       tilte="brischik"/><span class="rashiName">বৃশ্চিক</span></a></div>
        <div class="col-md-3 col-xs-3"><a class="rashi" href="brisho">      <img src="<?php echo base_url(); ?>assets/front/images/rashi/taurus.jpg"        tilte="brisho"/><span class="rashiName">বৃষ</span></a></div>
        <div class="col-md-3 col-xs-3"><a class="rashi" href="konna">       <img src="<?php echo base_url(); ?>assets/front/images/rashi/virgo.jpg"         tilte="konna"/></a><span class="rashiName">কন্যা</span></div>
    </div>
    <div id="rashifal-des" class="rashifal-des">দয়াকরে আপনার রাশির উপর ক্লিক করুন</div>
</div>

<style>
    .rashifal{
        margin-top:0px;
        margin-left:0px;
        margin-right:0px;
        width:370px;
        height:393px;
        /*border:1px solid #2D6AB4;*/
        padding-left:2px;
        padding-bottom:25px;
        overflow: hidden;
    }

    .rashifal-des{
        margin:10px;
        font-size:16px;
        line-height:23px;
    }

    .rashiName{
        padding-left:0px;
        font-size:16px;
        line-height:22px;
        margin-left:20px;
    }

    .rashi{
        margin-left:0px;
        margin-top: 0px;
    }
</style>

<script>
    $(".rashi").click(function(e) {
        e.preventDefault();
        var href = $(this).attr("href");

        $.ajax({
            type: "POST",
            url: "<?php echo base_url() ?>index.php/rashifal/get/" + href,
            success: function(result) {
                document.getElementById("rashifal-des").innerHTML = result;
            }
        });
    });
</script>

