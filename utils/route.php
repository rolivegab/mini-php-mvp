<?php
    class Route {
        static function get (string $path, callable $action) {
            if ($_SERVER['REQUEST_URI'] === $path && $_SERVER['REQUEST_METHOD'] === 'GET') {
                $action();
            }
        }
        
        static function post (string $path, callable $action) {
            if ($_SERVER['REQUEST_URI'] === $path && $_SERVER['REQUEST_METHOD'] === 'POST') {
                $action();
            }
        }
    };
    