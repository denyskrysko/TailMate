<?php
class PageController {
    public static function home() {
        $first_name = 'John';
        $last_name  = 'Doe';
        require_once('view/page/home.php');
    }

    public static function error() {
        require_once('view/page/error.php');
    }
}