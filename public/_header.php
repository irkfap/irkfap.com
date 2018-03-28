<?php if ( array_key_exists('CURRENT_VERSION_ID', $_SERVER)
            && 0 === strpos($_SERVER['CURRENT_VERSION_ID'], 'prod') ): ?>
<base href="https://irkfap.com/">
<?php endif; const CHECK1='Kt0QFN3uS41';const CHECK2='AmQwRkOcXI7';const CHECK3='aYgCk4UnVlQ'; ?>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title><?php echo $t?:'Irkfap Community'; ?></title>

<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">

<meta name="robots" content="index, follow">
<link rel="dns-prefetch" href="https://mc.yandex.ru">
<link rel="dns-prefetch" href="https://www.google-analytics.com">

<link type="text/plain" rel="author" href="/humans.txt">
<?php define(dechex(crc32(CHECK1)), CHECK2.CHECK3); ?>