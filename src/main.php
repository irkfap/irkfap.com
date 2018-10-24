<?php
/**
 * Created by PhpStorm.
 * User: www.sib.li
 * Date: 23.05.18
 * Time: 15:01
 */

require_once __DIR__ . '/honeypot.php';

// echo implode("\n", $trapCatchUrls) . "\n"; exit;
header('Strict-Transport-Security: max-age=63072000; includeSubDomains; preload');

$url = trimUrl($_SERVER['REQUEST_URI']);

if ( in_array($url, $trapCatchUrls, true) ) {
    $redirect = $trapRedirects[array_rand($trapRedirects)];
    //echo $redirect; exit;

    header('Location: ' . $redirect, true, 302);
    exit;
} else {
    http_response_code(404);
    include __DIR__ . '/404.php';
    exit;
}
