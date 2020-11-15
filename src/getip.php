<?php
header('Cache-Control: no-cache, must-revalidate');

if (array_key_exists('json', $_GET)) {
    header('Content-Type: application/json');

    echo json_encode([
        'user' => [
            'ip' => getIp(),
            'country' => getCountry(),
        ]
    ], JSON_PRETTY_PRINT);
} else {
    echo getIp();
}

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

function getCountry() {
    if (array_key_exists('HTTP_CF_IPCOUNTRY', $_SERVER)) {
        return strtolower($_SERVER['HTTP_CF_IPCOUNTRY']);
    }
    if (array_key_exists('HTTP_X_APPENGINE_COUNTRY', $_SERVER)) {
        return strtolower($_SERVER['HTTP_X_APPENGINE_COUNTRY']);
    }
    return '';
}
