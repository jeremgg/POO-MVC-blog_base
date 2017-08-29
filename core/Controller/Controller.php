<?php

    namespace Core\Controller;


    class Controller{

    	//Stocker les chemin des views par defaut vide
        protected $viewPath;

        //Stocker le nom du template de page
        protected $template;




        /**
         * Permet d'afficher le contenu html sur la vue à afficher
         * @param  $view        page à utiliser
         * @param  $variables   variables des contenues à afficher
         */
        protected function render($view, $variables = []){
            ob_start();
            extract($variables);  //extraire la valeur des variables
            require($this->viewPath . str_replace('.', '/', $view) . '.php');
            $content = ob_get_clean();
            require($this->viewPath . 'templates/' . $this->template . '.php');
        }
    }



?>
