<?php
    namespace app\controllers;
    use app\Core\Controller;

    class IndexController extends Controller{
        public function index(){
            $dados["view"] = "Pessoa/loginView";
            $this->load("template", $dados);
        }
    }