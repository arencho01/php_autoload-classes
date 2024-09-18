<?php
    spl_autoload_register(function ($class_name) {
        include __DIR__ . '/classes/' . $class_name . '.php';
    });

    $obj1 = new Test1();
    $obj2 = new Test2();

    $obj1 -> do();
    $obj2 -> do();