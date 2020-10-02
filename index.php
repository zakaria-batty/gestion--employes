<?php
require_once './views/include/header.php';
require_once './autoload.php';
require_once './controllers/homeController.php';

$home = new HomeController();

// $home->index($_GET['page']);
$pages = ['home', 'add', 'update', 'delete', 'logout'];
if (isset($_SESSION['logged']) && $_SESSION['logged'] === true) {


    if (isset($_GET['page'])) :
        if (in_array($_GET['page'], $pages)) :
            $page = $_GET['page'];
            $home->index($page);
        else :
            include('views/include/404.php');
        endif;
    else :
        $home->index('home');
    endif;



    require_once './views/include/footer.php';
} else if (isset($_GET['page']) &&  $_GET['page'] === 'register'){
    $home->index('register');
} else {
    $home->index('login');
}
