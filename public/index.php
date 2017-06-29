<!doctype html>
<html lang="en">
<head>
    <base href="http://irkfap.com/">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Irkfap community</title>
</head>
<body role="document">

Twitter: <a href="https://twitter.com/irkfap">@irkfap</a>
<br/>

<?php
$addresses  = ['invite', 'abuse'];
$address    = $addresses[array_rand($addresses)] . '@irkfap.com';
?>
Contact: <a href="mailto:<?php echo $address; ?>"><?php echo $address; ?></a>
<br/>

<pre>
 ____________
< Irkfap.com >
 ------------
        \   ^__^
         \  (oo)\_______
            (__)\       )\/\
                ||----w |
                ||     ||
</pre>

<br/>


<?php date_default_timezone_set('Europe/London'); ?>
©&nbsp;2009-<?php echo date('Y'); ?> <a href="/about">Irkfap community</a>

</body>
</html>