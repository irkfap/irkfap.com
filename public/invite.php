<!doctype html>
<html lang="en">
<head>
<?php $t='Irkfap Community Invitation'; include_once './_header.php'; ?>
<script><?php printf("var %s='%s';",$uniqId,fa16e3ac); ?></script>
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
