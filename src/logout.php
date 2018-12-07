<?php
/**
 * Created by PhpStorm.
 * User: www.sib.li
 * Date: 07.11.18
 * Time: 11:32
 */

require_once __DIR__ . '/_init.php';
session_name('IRKFAP'); session_start();
unset($_SESSION['TG_AUTH']);

if ( isset($_SESSION['PAGE']) ) {
    $page = $_SESSION['PAGE'];
    unset($_SESSION['PAGE']);
} else {
    $page = '/login';
}

header('Location: ' . $page);
exit;