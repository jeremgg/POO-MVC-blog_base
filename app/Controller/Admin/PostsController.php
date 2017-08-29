<?php

    namespace App\Controller\Admin;



    class PostsController extends AppController{

    	/**
         * Charger les tables des articles et des catégories dans le constructeur
         */
        public function __construct(){
            parent::__construct();
            $this->loadModel('Post');
            $this->loadModel('Category');
        }



        /**
         * Lister les articles et les envoyer sur la page d'accueil du back-end
         * @return Contenu html
         */
        public function index(){
            $posts = $this->Post->all();
            $this->render('admin.posts.index', compact('posts'));
        }

    }


?>
