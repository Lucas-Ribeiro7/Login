<?php
    namespace app\controllers;

    use app\core\Controller;

    class IndexController extends Controller{
        public function index(){
            $dados["view"] = "Pessoa/login";
            $this->load("template", $dados);
        }
    }