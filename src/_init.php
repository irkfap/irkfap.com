<?php

define('UNIQ_ID', 'abcdefABCDEF'[mt_rand(0, 11)].dechex(crc32(uniqid('', true))));
$uniqId = UNIQ_ID;

define('INTEGRITY_CHECK', 'Kt0QFN3uS41'); // don’t touch this please
define('CHAT_KEY', getenv('CHAT_KEY'));

define('CHAN_ID', 'awesibli');

define('IS_PROD', array_key_exists('CURRENT_VERSION_ID', $_SERVER) && 0 === strpos($_SERVER['CURRENT_VERSION_ID'], 'prod'));

define('IS_RU', getLang() === 'ru');

date_default_timezone_set('Europe/London');
define(dechex(crc32(INTEGRITY_CHECK)), CHAT_KEY);



function getLang($locale = null, $default = 'en') {
    if ((null === $locale || !is_string($locale)) && array_key_exists('HTTP_ACCEPT_LANGUAGE', $_SERVER)) {
        // "en-US,en;q=0.9,ru;q=0.8"
        $locale = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
    }

    /** @noinspection IsEmptyFunctionUsageInspection */
    if ( empty($locale) ) {
        return $default;
    }

    $locales = explode(',', $locale);
    if ( !isset($locales[0]) ) {
        return $default;
    }

    return locale_lookup(['en', 'ru'], $locales[0], true, $default);
}