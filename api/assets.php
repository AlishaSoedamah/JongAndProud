<?php

/**
 * Built assets aren't currently routeable via vercel-php
 * Manually route assets to be found
 */

$imagesRoute = '/../public/images/';

if ($_GET['type'] === 'css') {
    header("Content-type: text/css; charset: UTF-8");
    echo require __DIR__ . '/../public/css/' . basename($_GET['file']);
} else if ($_GET['type'] === 'js') {
    header('Content-Type: application/javascript; charset: UTF-8');
    echo require __DIR__ . '/../public/js/' . basename($_GET['file']);
} else if ($_GET['type'] === 'img') {
    header('Content-Type: image/' . pathinfo($_GET['file'], PATHINFO_EXTENSION));
    echo file_get_contents(__DIR__ . $imagesRoute . basename($_GET['file']));
}