<!doctype html>
<html lang="en">
<head>
<?php $t='Irkfap Community Invitation'; include_once './_header.php'; ?>
</head>
<script>
    var inviteCode = '<?php echo fa16e3ac; ?>';
</script>
<body role="document">

    <h1>Irkfap Community 3.0</h1>
    <h2><a id="a-invite" href="https://t.me/durov" rel="nofollow">Click at your own risk</a></h2>

    <script>
        // Crawler semi-protection
        var a = document.getElementById('a-invite');
        var link = a.getAttribute('href');
        a.setAttribute( 'href', link.replace('durov', 'joinchat/' + inviteCode) );
    </script>
<?php include_once './_footer.php'; ?>
</body>
</html>
