<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta name="viewport" content="width-device-width, initial-scale=1">
    <meta charset="UTF-8">
    <title>Qual seu perfil de investidor?</title>
    <link rel="stylesheet" type="text/css" href="../../css/styleLogin.css">
</head>

<body>
    <section>
        <div class="box">
            <div class="form">
                <h2>Login</h2>
                <form action="../infra/validation/validate.php" method="POST">
                    <div class="inputBx">
                        <input name="usuario" type="text" placeholder="Usuário">
                        <img src="../../img/user.png">
                    </div>
                    <div class="inputBx">
                        <input name="senha" type="password" placeholder="Senha">
                        <img src="../../img/lock.png">
                    </div>
                    <label class="remember"><input type="checkbox"> Lembrar-me</label>
                    <div class="inputBx">
                        <input type="submit" name="action" value="Login">
                    </div>
                </form>
                <p>Esqueci minha <a href="#">senha</a></p>
                <p>Criar uma <a href="cadastro.php">conta</a></p>

                <?php
                if(isset($_POST['nao_autenticado'])):
                ?>
                <div class="is-error">    
                    <p>ERRO: Usuário ou senha inválidos.</p>
                </div>
                <?php                
                endif;
                unset($_POST['nao_autenticado']);
                ?>
            </div>
        </div>
    </section>
</body>

</html>