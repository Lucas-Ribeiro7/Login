<?php

    use app\Controller\PessoaController;

    include "PessoaController.php";

    $pessoa = new PessoaController();

    if(isset($_POST["nome"])){
        $nome = $_POST["nome"];
        $dt_nascimento = $_POST["dt_nascimento"];
        $email = $_POST["email"];
        $matricula = $_POST["matricula"];
        $senha_confere1 = $_POST["senha-confere1"];
        $senha_confere2 = $_POST["senha-confere2"];
        if($senha_confere1 == $senha_confere2){
            $senha = $senha_confere1;
        }else{
            echo "<a href=\"javascript:history.go(-1)\">Senhas são diferentes!</a>"; //Volta uma PAGINA ANTERIOR
        }
    }