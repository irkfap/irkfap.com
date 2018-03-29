<!doctype html>
<html lang="en">
<head>
<?php $t='Irkfap Community 3.0'; include_once './_header.php'; ?>
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


<h1 class="green">PANIC MODE OFF</h1>
<h3>Telegram is back. Kind of</h3>
<blockquote class="twitter-tweet" data-lang="en"><p lang="en" dir="ltr">Power outage at a <a href="https://twitter.com/telegram?ref_src=twsrc%5Etfw">@telegram</a> server cluster causing issues in Europe. Working to fix it from our side, but a lot depends on when the datacenter provider puts the power equipment in order.</p>&mdash; Pavel Durov (@durov) <a href="https://twitter.com/durov/status/979284965178400769?ref_src=twsrc%5Etfw">March 29, 2018</a></blockquote>


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