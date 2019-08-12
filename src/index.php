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

<!-- p><img src="img/logo.png" width="256" height="256" alt="Yay! New logo!"></p -->
<p><img src="img/logo_irkfap-10yr-anniversary-may.png" width="500" height="500" alt="Irkfap 10th Anniversary teaser!"></p>

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

<?php include __DIR__ . '/_footer.php'; ?>
</body>
</html>
