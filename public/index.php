<!doctype html>
<html lang="en">
<head>
<?php include_once './_header.php'; ?>
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

<br>
<a href="/invite"><img src="/img/good-news.jpg" width="620" height="624" alt="Good news, everyone! We are back!" /></a>

<br><br><br><br><br><br><br><br><br><br>

<h1>We are expiriencing a MAJOR OUTAGE right now</h1>
<h3>Sasha has been <i>PISDANOOLSYA</i></h3>

<h3>Keep calm and <s>be a pandicorn</s> wait for the updates</h3>

<img src="/img/breaking-news.jpg" width="640" height="360" alt="Breaking news: Sasha is pisdanoolsya" />

<h3>Also the good news: our website now supports HTTP/2!</h3>

<?php include_once './_footer.php'; ?>
</body>
</html>