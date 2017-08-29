<?php

    namespace App\Controller;

    use Core\Controller\Controller;
    use \App;



    class PostsController extends AppController{

        /**
         * Affichage du contenu de la home page
         * @return Contenu html
         */
        public function index(){
            //Lister les articles et les catégories
            $posts = App::getInstance()->getTable('Post')->last();
            $categories = App::getInstance()->getTable('Category')->all();

            //Générer la vue de la home page pour récupérer le contenu html
            //passer les variables posts et categories dans la fonction compact pour générer leurs valeurs automatiquement
            $this->render('posts.index', compact('posts','categories'));
        }



        /**
         * [category description]
         * @return [type] [description]
         */
        public function category(){

        }



        /**
         * [single description]
         * @return [type] [description]
         */
        public function single(){

        }

    }


?>
