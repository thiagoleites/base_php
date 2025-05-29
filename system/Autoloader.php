<?php

class Autoloader {
    public static function register(){
        spl_autoload_register(function ($class) {
            $base_dir = __DIR__ . '/../app/';
            $file = $base_dir . str_replace('\\', '/', $class . '.php');

            if (file_exists($file)) {
                require $file;
                return true;
            }
            
            $core_file = $base_dir . 'core/' . str_replace('\\', '/', $class) . '.php';
            if (file_exists($core_file)) {
                require $core_file;
                return true;
            }

            return false;
        });
    }
}