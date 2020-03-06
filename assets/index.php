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
        (new Minify\JS("$jspath/$file"))->minify("$path/dist/$name.min.js");
    }
}

foreach ($cssfiles as $file) {
    if ($pos = strrpos($file, '.css')) {
        $name = substr($file, 0, $pos);
        (new Minify\CSS("$csspath/$file"))->minify("$path/dist/$name.min.css");
    }
}
