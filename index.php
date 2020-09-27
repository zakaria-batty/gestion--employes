<?php
require_once './controllers/homeController.php';

$home = new HomeController();

$home->index('home');

?>