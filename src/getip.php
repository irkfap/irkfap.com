<?php
echo getIp();

function getIp() {
    if (array_key_exists('HTTP_CF_CONNECTING_IP', $_SERVER)) {
        return $_SERVER['HTTP_CF_CONNECTING_IP'];
    }
    if (array_key_exists('HTTP_X_FORWARDED_FOR', $_SERVER)) {
        return trim(explode(',', $_SERVER['HTTP_X_FORWARDED_FOR'])[0]);
    }
    if (array_key_exists('HTTP_X_APPENGINE_USER_IP', $_SERVER)) {
        return $_SERVER['HTTP_X_APPENGINE_USER_IP'];
    }
    return $_SERVER['REMOTE_ADDR'];
}
