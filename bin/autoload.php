<?php

spl_autoload_register(function ($class) {
    $prefix = 'Adsr\\Elektron\\';
    $base_dir = dirname(__DIR__) . '/lib/';
    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) {
        return;
    }
    $relative_class = substr($class, $len);
    $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';
    require $file;
});
