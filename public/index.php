<!doctype html>
<html lang="en">
<head>
<?php $t='Irkfap Community 3.0'; include_once './_header.php'; ?>

<style>
    .red {
        color: #d00000;
    }
</style>
</head>
<body role="document">

Twitter: <a href="https://twitter.com/irkfap">@irkfap</a>
<br>

<?php
$addresses  = ['invite', 'abuse', 'support', 'feedback', 'job', 'hr'];
$address    = $addresses[array_rand($addresses)] . '@irkfap.com';
?>
Contact: <a href="mailto:<?php echo $address; ?>"><?php echo $address; ?></a>
<br>

→ <a href="/status">Current Status</a>
<br>


<h1 class="red">PANIC MODE ON</h1>
<h1 class="red">TELEGRAM IS DOWN</h1>
<p><img src="img/telegram-down.jpg" alt="Telegram is DOWN" /></p>

<pre>
 ____________
&lt; Irkfap.com &gt;
 ------------
        \   ^__^
         \  (oo)\_______
            (__)\       )\/\
                ||----w |
                ||     ||
</pre>
<br/>

<p>How deep you should regret about not selling Bitcoin half a year ago? Answer is right here!</p>

<!-- TradingView Widget BEGIN
<div style="max-width: 600px; margin: 20px 0;">
    <div id="tv-medium-widget-a789d"></div>
</div>
<script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
<script type="text/javascript">
    new TradingView.MediumWidget({
        "container_id": "tv-medium-widget-a789d",
        "symbols": [
            [
                "ETH",
                "COINBASE:ETHUSD|3m"
            ],
            [
                "BTC",
                "COINBASE:BTCUSD|3m"
            ]
        ],
        "gridLineColor": "#e9e9ea",
        "fontColor": "#83888D",
        "underLineColor": "#dbeffb",
        "trendLineColor": "#4bafe9",
        "width": "600px",
        "height": "330px",
        "locale": "en",
        "chartOnly": true
    });
</script>
<!-- TradingView Widget END -->

<!-- -->
<div class="btcwdgt-chart" bw-theme="light"></div>
<script>
    (function(b,i,t,C,O,I,N) {
        window.addEventListener('load',function() {
            if(b.getElementById(C))return;
            I=b.createElement(i),N=b.getElementsByTagName(i)[0];
            I.src=t;I.id=C;N.parentNode.insertBefore(I, N);
        },false)
    })(document,'script','https://widgets.bitcoin.com/widget.js','btcwdgt');
</script>
<!-- -->


<?php include_once './_footer.php'; ?>
</body>
</html>