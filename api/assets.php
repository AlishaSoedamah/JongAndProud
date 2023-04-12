<?php

/**
 * Built assets aren't currently routeable via vercel-php
 * Manually route assets to be found
 */

$imagesRoute = '/../public/images/';
// Forward Vercel requests to normal index.php
$files = array('css', 'js', 'json', 'png','jpg','jpeg','gif','pdf','docx','xls','xlsx','doc');
$isFile = false;
$type = '';
$index = 0;
foreach ($files as $file) {
    if (strpos($_GET['file'], $file) !== FALSE) {
        $isFile = true;
        $type = $files[$index];
    }
    $index++;
}
if(!$isFile){
    require __DIR__ . '/../public/index.php';
} else {
if ($_GET['type'] === 'css') {
    header("Content-type: text/css; charset: UTF-8");
    echo require __DIR__ . '/../public/css/' . basename($_GET['file']);
} else if ($_GET['type'] === 'js') {
    header('Content-Type: application/javascript; charset: UTF-8');
    echo require __DIR__ . '/../public/js/' . basename($_GET['file']);
} else if($type == 'png' || $type == 'jpeg' || $type == 'jpg' || $type == 'gif' || $type == 'webp'){
    header('Content-Type: image/' . $type);
    echo require __DIR__ . '/../public/images' . basename($_GET['file']);
} else if ($type == 'ico') {
    header('Content-Type: image/x-icon');
    echo require __DIR__ . '/../public/' . basename($_GET['file']);
}
require __DIR__ . '/../public/' . $_GET['file'];
}