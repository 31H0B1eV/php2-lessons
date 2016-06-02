<?php

function __autoload($class)
{
    if (is_readable(__DIR__ . '/classes/' . $class . '.php')) {
        require __DIR__ . '/classes/' . $class . '.php';
    }
    if (is_readable(__DIR__ . '/models/' . $class . '.php')) {
        require __DIR__ . '/models/' . $class . '.php';
    }
}