<?php

/**
 * Built assets aren't currently routeable via vercel-php
 * Manually route assets to be found
 */

$imagesRoute = '/../public/images/';

if ($_GET['type'] === 'css') {
    header("Content-type: text/css; charset: UTF-8");
    echo require __DIR__ . '/../public/css/' . basename($_GET['file']);
}

if ($_GET['type'] === 'js') {
    header('Content-Type: application/javascript; charset: UTF-8');
    echo require __DIR__ . '/../public/scripts/' . basename($_GET['file']);
}

// if ($_GET['type'] === 'jpeg') {
//     header('Content-Type: image/jpeg');
//     echo require __DIR__ . imagesRoute . basename($_GET['file']);
// }

// if ($_GET['type'] === 'webp') {
//     header('Content-Type: image/png');
//     echo require __DIR__ . imagesRoute . basename($_GET['file']);
// }

// if ($_GET['type'] === 'jpeg') {
//     header('Content-Type: image/webp');
//     echo require __DIR__ . imagesRoute . basename($_GET['file']);
// }

// if ($_GET['type'] === 'ico') {
//     header('Content-Type: image/x-icon');
//     echo require __DIR__ . '/../public/' . basename($_GET['file']);
// }
