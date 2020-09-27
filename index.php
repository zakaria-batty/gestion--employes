<?php
require_once './autoload.php';
require_once './controllers/homeController.php';

$home = new HomeController();

// $home->index($_GET['page']);
$pages = ['home','add','update','delete'];

if(isset($_GET['page'])){
    if(in_array($_GET['page'],$pages)){
        $page = $_GET['page'];
        $home->index($page);
    }else{
        include('views/include/404.php');
    }
}else{
    $home->index('home');
}

?>