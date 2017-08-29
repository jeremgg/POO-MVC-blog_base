<?php

    //constante qui définit la racine de l'application
	define('ROOT', dirname(__DIR__));

    
    //Chargement de la class App
    require ROOT . '/app/App.php';
    

    //Chargement de notre autoloader
    App::load();




    //Vérifier qu'une variable url p existe,
    //si c'est le cas on la stocke dans une variable p
    if(isset($_GET['p'])){
        $page = $_GET['p'];
    }
    else{
        $page = 'home';
    }




    //Afficher les contenu des pages chargées
    if($page === 'home'){
        $controller = new App\Controller\PostsController();
        $controller->index();
    }
    elseif($page === 'posts.category'){
        $controller = new App\Controller\PostsController();
        $controller->category();
    }
    elseif($page === 'posts.single'){
        $controller = new App\Controller\PostsController();
        $controller->single();
    }
    elseif($page === 'login'){
        $controller = new App\Controller\UsersController();
        $controller->login();
    }


?>
