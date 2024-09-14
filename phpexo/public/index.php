<?php

use App\Controller\PostController;

define('ROOT', dirname(__DIR__));   // Définit la constante ROOT avec le chemin du dossier parent

require ROOT . '/app/App.php';

App::load();   // Charge l'application

if (isset($_GET['p'])) {
    $page = $_GET['p'];
} else {
    $page = 'home';
}

ob_start();

if ($page === 'home') {
    $controller = new PostController();
    $controller->index();

} elseif ($page === 'posts.category') {
    $controller = new PostController();
    $controller->category();

} elseif ($page === 'posts.show') {
    $controller = new PostController();
    $controller->show();

} /*elseif ($page === 'login') {
    $controller = new UserController();
    $controller->login();
}*/
