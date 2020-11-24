<?php
session_start();
include('../infra/db/conexao.php')
?>

<!doctype html>
<html lang="pt-BR">
    <head>
        <title>Qual seu perfil de investidor?</title>
    </head>

<body>
    <?php

    $investCons = 1;
    $investMod = 5;
    $investAgre = 10;
    $total = 0;

    $questao1 = mysqli_real_escape_string($conexao, $_POST["questao1"]);
    $questao2 = mysqli_real_escape_string($conexao, $_POST["questao2"]);
    $questao3 = mysqli_real_escape_string($conexao, $_POST["questao3"]);
    $questao4 = mysqli_real_escape_string($conexao, $_POST["questao4"]);
    $questao5 = mysqli_real_escape_string($conexao, $_POST["questao5"]);
    $questao6 = mysqli_real_escape_string($conexao, $_POST["questao6"]);
    $questao7 = mysqli_real_escape_string($conexao, $_POST["questao7"]);
    $questao8 = mysqli_real_escape_string($conexao, $_POST["questao8"]);
    $questao9 = mysqli_real_escape_string($conexao, $_POST["questao9"]);

    if ($questao1 == 'op1'){
        $total = $total + $investCons;
    }elseif ($questao1 == 'op2'){
        $total = $total + $investMod;
    }elseif ($questao1 == 'op3'){
        $total = $total + $investAgre;
    }

    if ($questao2 == 'op1'){
        $total = $total + $investCons;
    }elseif ($questao2 == 'op2'){
        $total = $total + $investMod;
    }elseif ($questao2 == 'op3'){
        $total = $total + $investAgre;
    }

    if ($questao3 == 'op1'){
        $total = $total + $investCons;
    }elseif ($questao3 == 'op2'){
        $total = $total + $investMod;
    }elseif ($questao3 == 'op3'){
        $total = $total + $investAgre;
    }

    if ($questao4 == 'op1'){
        $total = $total + $investCons;
    }elseif ($questao4 == 'op2'){
        $total = $total + $investMod;
    }elseif ($questao4 == 'op3'){
        $total = $total + $investAgre;
    }

    if ($questao5 == 'op1'){
        $total = $total + $investCons;
    }elseif ($questao5 == 'op2'){
        $total = $total + $investMod;
    }elseif ($questao5 == 'op3'){
        $total = $total + $investAgre;
    }

    if ($questao6 == 'op1'){
        $total = $total + $investCons;
    }elseif ($questao6 == 'op2'){
        $total = $total + $investMod;
    }elseif ($questao6 == 'op3'){
        $total = $total + $investAgre;
    }

    if ($questao7 == 'op1'){
        $total = $total + $investCons;
    }elseif ($questao7 == 'op2'){
        $total = $total + $investMod;
    }elseif ($questao7 == 'op3'){
        $total = $total + $investAgre;
    }

    if ($questao8 == 'op1'){
        $total = $total + $investCons;
    }elseif ($questao8 == 'op2'){
        $total = $total + $investMod;
    }elseif ($questao8 == 'op3'){
        $total = $total + $investAgre;
    }

    if ($questao9 == 'op1'){
        $total = $total + $investCons;
    }elseif ($questao9 == 'op2'){
        $total = $total + $investMod;
    }elseif ($questao9 == 'op3'){
        $total = $total + $investAgre;
    }

    if ($total <= 10){
        $perfil = ('Conservador');
    }elseif ($total >= 11 && $total <= 50){
        $perfil = ('Moderado');
    }elseif ($total >= 51 && $total <= 100){
        $perfil = ('Agressivo');
    }

    $usuario = mysqli_real_escape_string($conexao, $_SESSION['usuario']);

    $query = "UPDATE usuario SET perfil='$perfil' WHERE usuario='$usuario'";
    $result = mysqli_query($conexao, $query);

    if($result == 1) {
        header('Location: painel.php');
        exit();
    } else {
        header('Location: painel_login.php');
        exit();
    }


    ?>

</body>
</html>