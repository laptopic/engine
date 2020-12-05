<?php

if ( ! function_exists('dump')){
    function dump($val)
    {
        echo "<pre>";
        print_r($val);
        echo "</pre>";
    }
}

if ( ! function_exists('dd')){
    function dd($val)
    {
    die(dump($val));
    }
}

if ( ! function_exists('old')){
    function old($inputName = '', $default = '')
    {
        return $_POST[$inputName] ?? ($_GET[$inputName] ?? $default);
    }
}

if ( ! function_exists('serverMethod')){
    function serverMethod()
    {
        return $_SERVER['REQUEST_METHOD'];
    }
}


