<!doctype html>
<html lang="en">
<head>
<?php $t='Irkfap Community Invitation'; include_once './_header.php'; ?>
<?php $var = 'abcdefABCDEF'[rand(0, 11)].dechex(crc32(uniqid('', true))); ?>
<script><?php printf("var %s='%s';",$var,fa16e3ac); ?></script>
</head>
<body role="document">

    <h1>Irkfap Community 3.0</h1>
    <h2><a id="a-invite" href="https://t.me/awesibli" rel="nofollow">Click at your own risk</a></h2>

    <script>
        // Crawler semi-protection
        var a = document.getElementById('a-invite');
        var link = a.getAttribute('href');
        a.setAttribute( 'href', link.replace('awesibli', 'joinchat/' + <?php echo $var; ?>) );
    </script>

<?php include_once './_footer.php'; ?>
</body>
</html>
