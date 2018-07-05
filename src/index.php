<!doctype html>
<html lang="en">
<head>
<?php $t='Irkfap Community 3.0'; include __DIR__ . '/_header.php'; ?>
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

<p><img src="img/logo.png" width="256" height="256" alt="Yay! New logo!"></p>

<h1>Making YOU Great Again since 2009</h1>

<h3>If it looks like a duck, swims like a duck, and quacks like a duck, then it probably is a dick.</h3>

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
<br><br>

<!--<p>How deep you should regret about not selling Bitcoin half a year ago? Answer is right here!</p>
-->
<!--
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
-->

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

<?php include __DIR__ . '/_footer.php'; ?>
</body>
</html>