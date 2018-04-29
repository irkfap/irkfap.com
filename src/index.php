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
<br>


<h1 class="green">We are back</h1>
<blockquote class="twitter-tweet" data-lang="en"><p lang="en" dir="ltr">Repairs are ongoing after a massive power outage in the Amsterdam region that affected many services. Telegram users in Europe, MENA, Russia and the CIS are currently unable to connect. We apologize and will update you on the progress. <a href="https://t.co/WyfYimZoKV" rel="nofollow">https://t.co/WyfYimZoKV</a></p>&mdash; Telegram Messenger (@telegram) <a href="https://twitter.com/telegram/status/990474364108894209?ref_src=twsrc%5Etfw" rel="nofollow">April 29, 2018</a></blockquote>
<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>


<br><br>

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