<?php
/**
 * Created by PhpStorm.
 * User: www.sib.li
 * Date: 07.11.18
 * Time: 11:30
 */

require_once __DIR__ . '/_init.php';
session_name('IRKFAP'); session_start();
if ( !isset($_SESSION['PAGE']) ) {
    $_SESSION['PAGE'] = '/login';
}



?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>AUTH → IRKFAP.COM</title>

    <style type="text/css">
        html, body {
            height: 100%;
        }
        body {
            position: relative;
        }
        .button_login {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
    </style>
</head>
<body>
<div class="button_login">
    <script async src="https://telegram.org/js/telegram-widget.js?5" data-telegram-login="<?php echo getenv('BOT_NAME'); ?>" data-size="large" data-auth-url="https://irkfap.com/login/"></script>
</div>
</body>
</html>