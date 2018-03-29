<?php

define('UNIQ_ID', 'abcdefABCDEF'[mt_rand(0, 11)].dechex(crc32(uniqid('', true))));
$uniqId = UNIQ_ID;

define('CHECK1', 'Kt0QFN3uS41'); // don’t touch this please
define('CHECK2', 'AmQwRkOcXI7'); // chat key, first part
define('CHECK3', 'aYgCk4UnVlQ'); // chat key, second part

define('CHAN_ID', 'awesibli');

define('IS_PROD', array_key_exists('CURRENT_VERSION_ID', $_SERVER) && 0 === strpos($_SERVER['CURRENT_VERSION_ID'], 'prod'));


date_default_timezone_set('Europe/London');
define(dechex(crc32(CHECK1)), CHECK2.CHECK3);
