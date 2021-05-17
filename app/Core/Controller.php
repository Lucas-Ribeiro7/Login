<?php
    namespace app\core;

    class Controller{
        public function load($viewNome, $viewData = array()){
            extract($viewData); //O Extract confere se as chaves da array tem os valores que pode se tornar uma variável, iai se eu chamar uma chave da array como variável, ela vai. Ex: se eu digitar $nome vai sair "Lucas Ribeiro"
            
            include "app/views/" . $viewNome . ".php";
        }
    }