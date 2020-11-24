<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Qual seu perfil de investidor?</title>
    <link rel="stylesheet" type="text/css" href="css/styleCadastro.css">
</head>

<body>
    <section>
        <div class="box">
            <div class="form">
                <h2>Cadastrar</h2>
                <form action="../infra/validation/validate.php" method="POST">
                    <div class="inputBx">
                        <input name="nome" type="text" placeholder="Nome">
                    </div>
                    <div class="inputBx">
                        <input name="usuario" type="text" placeholder="Usuário">
                    </div>
                    <div class="inputBx">
                        <input name="senha" type="password" placeholder="Senha">
                    </div>
                    <div class="inputBx">
                        <input type="submit" name="action" value="Cadastrar">
                    </div>
                </form>
                <p>Já tenho uma conta, fazer <a href="painel_login.php">login</a></p>
                <?php
                if(isset($_SESSION['status_cadastro'])):
                ?>
                <div class="is-success">
                    <p>Cadastro efetuado!</p>
                    <p>Faça login informando o seu usuário e senha <a href="painel_login.php">aqui</a></p>
                </div>
                <?php
                endif;
                unset($_SESSION['status_cadastro']);
                ?>
                <?php
                if(isset($_SESSION['usuario_existe'])):
                ?>
                <div class="is-info">
                    <p>O usuário escolhido já existe. Informe outro e tente novamente.</p>
                </div>
                <?php
                endif;
                unset($_SESSION['usuario_existe']);
                ?>
            </div>
        </div>

    </section>
</body>

</html>