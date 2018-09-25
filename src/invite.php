<?php session_name('INVITEID'); session_start(); ?><!doctype html>
<html lang="en">
<head>
<?php $t='Irkfap Community Invitation'; include __DIR__ . '/_header.php';
$fileId = substr(base64_encode(md5(uniqid('', true))), mt_rand(0, 34), 9);
$_SESSION['invite_id']  = $uniqId;
$_SESSION['file_id']    = $fileId;
?>
<script src="/invite/<?php echo $fileId ?>.js"></script>
</head>
<body role="document">

    <h1>Irkfap Community 3.0</h1>
    <h2><a id="a-invite" href="https://t.me/<?php echo CHAN_ID; ?>" rel="nofollow">Click at your own risk</a></h2>

    <script>
        // Crawler semi-protection
        var a = document.getElementById('a-invite');
        // https://t.me/joinchat/CHAT_KEY → tg://join?invite=CHAT_KEY
        a.setAttribute( 'href', 'tg://join?invite=' + <?php echo $uniqId; ?> );
    </script>

<?php include __DIR__ . '/_footer.php'; ?>
</body>
</html>
