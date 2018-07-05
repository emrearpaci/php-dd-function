<?php

function dd($var)
{
    ob_end_clean();
    $backtrace = debug_backtrace();
    echo "\n<pre>\n";
    if (isset($backtrace[0]['file'])) {
        $filename = $backtrace[0]['file'];
        $filename = explode('\\' , $filename);
        echo end($filename) . "\n\n";
    }
    echo "---------------------------------\n\n";
    var_dump($var);
    echo "</pre>\n";
    die;
}