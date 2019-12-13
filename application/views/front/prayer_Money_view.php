<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<div class="row" style="margin-top: -18px;">
    <div class="col-md-6" id="money" style="display: none;">
        <!-- EXCHANGERATES.ORG.UK EXCHANGE RATE CONVERTER START -->
        <script type="text/javascript">
            var dcf = 'USD';
            var dct = 'BDT';
            var mc = '2D6AB4';
            var mbg = 'FFFFFF';
            var f = 'arial';
            var fs = '11';
            var fc = '000000';
            var tf = 'arial';
            var ts = '14';
            var tc = 'FFFFFF';
            var tz = '6';
        </script>
        <script type="text/javascript" src="http://www.currency.me.uk/remote/ER-ERC-1.php"></script>
        <small>Source: <a href="http://www.exchangerates.org.uk" target="_new">ExchangeRates.org.uk</a></small>
        <!-- EXCHANGERATES.ORG.UK  EXCHANGE RATE CONVERTER END -->
    </div>

    <div class="col-md-6" style="padding-left: 5px;">
        <div class="prayer">
            <div class="title blue">নামাজের সময়</div>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <td>ফজর</td>
                            <td><?php echo $prayer[0]['fajr']; ?></td>
                        </tr>
                        <tr class="blue">
                            <td>জোহর</td>
                            <td><?php echo $prayer[0]['zohr']; ?></td>
                        </tr>
                        <tr>
                            <td>আসর</td>
                            <td><?php echo $prayer[0]['asar']; ?></td>
                        </tr>
                        <tr class="blue">
                            <td>মাগরিব</td>
                            <td><?php echo $prayer[0]['magrib']; ?></td>
                        </tr>
                        <tr>
                            <td>এশা</td>
                            <td><?php echo $prayer[0]['esha']; ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<style>
    .prayer{font-size:18px;}
    .blue{ background: #2D6AB4; color:#fff;}
    .col-md-6{padding:0px;}
</style>

