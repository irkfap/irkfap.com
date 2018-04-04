<?php session_name('INVITEID'); session_start(); ?><!doctype html>
<html lang="en">
<head>
<?php $t='Irkfap Community Invitation'; include_once './_header.php';
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
        var link = a.getAttribute('href');
        a.setAttribute( 'href', link.replace('<?php echo CHAN_ID; ?>', 'joinchat/' + <?php echo $uniqId; ?>) );
    </script>

<?php include_once './_footer.php'; ?>
</body>
</html>
