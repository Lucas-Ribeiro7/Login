<form action="app/Controller/Controller.php" method="POST">
    <fieldset> <legend>Cadastro</legend>
        <label>Nome: </label> <input type="text" name="nome" size="20" required> <br>
        <br>
        <label>Data de nascimento: </label> <input type="date" name="dt_nascimento" required> <br>
        <br>
        <label>Email: </label> <input type="text" name="email" size="20" required> <br>
        <br>
        <label>Matricula: </label> <input type="number" name="matricula" size="50" required> <br>
        <br>
        <label>Senha: </label> <input type="password" name="senha-confere1" size="10" required> <br>
        <br>
        <label>Confirme sua senha: </label> <input type="password" name="senha-confere2" size="10" required> <br>
        <br>
        <input type="submit" value="Cadastro">
        <input type="reset" value="Limpar">
    </fieldset>
</form>