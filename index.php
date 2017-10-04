<?php
    require_once('model/connection.php');

    if(isset($_GET['controller']) && $_GET['action']){
        $controller = $_GET['controller'];
        $action = $_GET['action'];
    }else{
        $controller = 'page';
        $action = 'home';
    }

    require_once('layout.php');
echo "dsdfsdfsdfsfd";