<?php

use MatthiasMullie\Minify;

require_once dirname(__FILE__) . '/vendor/autoload.php';

$ignore = [
    '.',
    '..',
    '.DS_Store'
];
$path = dirname(__FILE__);
$jspath = "$path/js";
$csspath = "$path/css";
$jsfiles = array_diff(scandir($jspath), $ignore);
$cssfiles = array_diff(scandir($csspath), $ignore);

foreach ($jsfiles as $file) {
    if ($pos = strrpos($file, '.js')) {
        $name = substr($file, 0, $pos);
        $newFile = "$path/dist/$name.min.js";
        echo "Minify js: $newFile\n";
        (new Minify\JS("$jspath/$file"))->minify($newFile);
    }
}

foreach ($cssfiles as $file) {
    if ($pos = strrpos($file, '.css')) {
        $name = substr($file, 0, $pos);
        $newFile = "$path/dist/$name.min.css";
        echo "Minify css: $newFile\n";
        (new Minify\CSS("$csspath/$file"))->minify($newFile);
    }
}
