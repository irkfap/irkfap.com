<?php
/**
 * Created by PhpStorm.
 * User: www.sib.li
 * Date: 23.05.18
 * Time: 15:01
 */

require_once __DIR__ . '/honeypot.php';

// echo implode("\n", $trapCatchUrls) . "\n"; exit;

$url = trimUrl($_SERVER['REQUEST_URI']);

if ( in_array($url, $trapCatchUrls, true) ) {
    $redirect = $trapRedirects[array_rand($trapRedirects)];
    //echo $redirect; exit;

    header('Location: ' . $redirect, true, 302);
    exit;
} else {
    include __DIR__ . '/404.php';
    exit;
}
