<?php
    class core{
        private $controller;
        private $metodo;
        private $parametros = array(); 

        public function __construct(){
            $this->verificarUrl();
        }

        public function iniciar(){
            $controllercorrente = $this->getController();
            
            $c = new $controllercorrente;
            call_user_func_array(array($c, $this->getMetodo()), $this->getParametros()); //Essa função "call_user_func_array()" consiste em passar o objeto junto com o método e passar também os parametros do método
        }
        public function verificarUrl(){
            //$_SERVER["PHP_SELF"] = Cria um espelho da URL que está
            $url = explode("index.php", $_SERVER["PHP_SELF"]); //Cria uma Array() tirando a posição que está entre aspas
            $url = end($url);//Ele coloca o valor da variavel igual a ultima posição do Array()

            if($url!=""){
                $url = explode('/', $url); //Cria uma array dividindo onde tiver '/', ou seja, a url toda, mas a primeira posição fica vazio, por que no primeiro '/' não vai ter nada a frente
                array_shift($url);//Exclui a primeira posição do Array

                //Pega o controle
                $this->setController(ucfirst(strtolower($url[0])) . "Controller"); //ucfirst() deixa a primeira letra do nome em maiusculo e o Método "strtolower()" serve para deixar as outras letras minuscula 
                array_shift($url);
                
                //Pega o Metodo
                if(isset($url[0])){
                    $this->setMetodo($url[0]);
                    array_shift($url);
                }
                
                //Pega os parametros
                if(isset($url[0])){
                    $this->setParametros(array_filter($url));
                }
            }else{
                $this->setController(ucfirst(strtolower(CONTROLLER_PADRAO)) . "Controller"); 
            }
        }
        public function getController(){
            if(class_exists(NAMESPACE_CONTROLLER . $this->controller)){
                return NAMESPACE_CONTROLLER . $this->controller;
            }
            return NAMESPACE_CONTROLLER . ucfirst(strtolower(CONTROLLER_PADRAO) . "Controller"); //Você pode chamar o index como chamei aí ou você pode dar um erro dizendo que esse controller não existe
        }
        public function getMetodo(){
            if(method_exists(NAMESPACE_CONTROLLER . $this->controller, $this->metodo)){
                return $this->metodo;
            }
            return METODO_PADRAO;
        }
        public function getParametros(){
            return $this->parametros;
        }
        public function setController($controller){
            $this->controller = $controller;
        }
        public function setMetodo($metodo){
            $this->metodo = $metodo;
        }
        public function setParametros($parametros){
            $this->parametros = $parametros;
        }
    }