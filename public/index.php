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

<br>
<a href="/invite"><img src="/img/good-news.jpg" width="620" height="624" alt="Good news, everyone! We are back!" /></a>

<?php include_once './_footer.php'; ?>
</body>
</html>