<?php require_once './config.php';
header('Content-Type: application/javascript; charset=utf-8');
header('Cache-Control: no-cache, must-revalidate');

$uniqId = pathinfo($_SERVER['PATH_INFO'], PATHINFO_FILENAME);
printf("var %s='%s';",$uniqId,fa16e3ac);
