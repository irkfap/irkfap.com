<?php
    header('Strict-Transport-Security: max-age=63072000; includeSubDomains; preload');
?>
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

<h1><img src="img/logo.png" width="256" height="256" alt="Irkfap logo"> <nobr>Making YOU Great Again since 2009</nobr></h1>

<p>
    <a href="/img/10th_anniversary/10th_anniversary_bw.jpg"><img src="img/10th_anniversary/10th_anniversary_bw_small.jpg" width="900" height="447" alt="Irkfap 10th Anniversary meeting"></a>
</p>

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
<br>

<?php include __DIR__ . '/_footer.php'; ?>
</body>
</html>
