<?php
    class Route {
        static function get (string $path, $action) {
            if ($_SERVER['REQUEST_URI'] === $path && $_SERVER['REQUEST_METHOD'] === 'GET') {
                if (is_callable($action)) {
                    $action();
                } else if (is_string($action)) {
                    $parts = explode('@', $action);
                    realpath(include_once(__DIR__).'/../controller/'.$parts[0].'.php');
                    $method = $parts[1];
                    $parts[0]::$method();
                }
            }
        }
        
        static function post (string $path, $action) {
            if ($_SERVER['REQUEST_URI'] === $path && $_SERVER['REQUEST_METHOD'] === 'POST') {
                if (is_callable($action)) {
                    $action();
                } else if (is_string($action)) {
                    $parts = explode('@', $action);
                    realpath(include_once(__DIR__).'/../controller/'.$parts[0].'.php');
                    $method = $parts[1];
                    $parts[0]::$method();
                }
            }
        }
    };
    