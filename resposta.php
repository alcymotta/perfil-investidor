<?php
session_start();
include('source/conexao.php')
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
    $investSup = 15;

    $questao1 = mysqli_real_escape_string($conexao, $_POST["questao1"]);
    $questao2 = mysqli_real_escape_string($conexao, $_POST["questao2"]);
    $questao3 = mysqli_real_escape_string($conexao, $_POST["questao3"]);
    $questao4 = mysqli_real_escape_string($conexao, $_POST["questao4"]);
    $questao5 = mysqli_real_escape_string($conexao, $_POST["questao5"]);
    $questao6 = mysqli_real_escape_string($conexao, $_POST["questao6"]);
    $questao7 = mysqli_real_escape_string($conexao, $_POST["questao7"]);
    $questao8 = mysqli_real_escape_string($conexao, $_POST["questao8"]);
    $questao9 = mysqli_real_escape_string($conexao, $_POST["questao9"]);

    echo "Questao 1 = ".$questao1."<br>";
    echo "Questao 2 = ".$questao2."<br>";
    echo "Questao 3 = ".$questao3."<br>";
    echo "Questao 4 = ".$questao4."<br>";
    echo "Questao 5 = ".$questao5."<br>";
    echo "Questao 6 = ".$questao6."<br>";
    echo "Questao 7 = ".$questao7."<br>";
    echo "Questao 8 = ".$questao8."<br>";
    echo "Questao 9 = ".$questao9."<br>";

    if ($questao1 == $op1){
        $total = $total + $investCons;
    }elseif ($questao1 == $op2){
        $total = $total + $investMod;
    }elseif ($questao1 == $op3){
        $total = $total + $investAgre;
    }elseif ($questao1 == $op4){
        $total = $total + $investSup;
    }

    if ($questao2 == $op1){
        $total = $total + $investCons;
    }elseif ($questao2 == $op2){
        $total = $total + $investMod;
    }elseif ($questao2 == $op3){
        $total = $total + $investAgre;
    }elseif ($questao2 == $op4){
        $total = $total + $investSup;
    }

    if ($questao3 == $op1){
        $total = $total + $investCons;
    }elseif ($questao3 == $op2){
        $total = $total + $investMod;
    }elseif ($questao3 == $op3){
        $total = $total + $investAgre;
    }elseif ($questao3 == $op4){
        $total = $total + $investSup;
    }

    if ($questao4 == $op1){
        $total = $total + $investCons;
    }elseif ($questao4 == $op2){
        $total = $total + $investMod;
    }elseif ($questao4 == $op3){
        $total = $total + $investAgre;
    }elseif ($questao4 == $op4){
        $total = $total + $investSup;
    }

    if ($questao5 == $op1){
        $total = $total + $investCons;
    }elseif ($questao5 == $op2){
        $total = $total + $investMod;
    }elseif ($questao5 == $op3){
        $total = $total + $investAgre;
    }elseif ($questao5 == $op4){
        $total = $total + $investSup;
    }

    if ($questao6 == $op1){
        $total = $total + $investCons;
    }elseif ($questao6 == $op2){
        $total = $total + $investMod;
    }elseif ($questao6 == $op3){
        $total = $total + $investAgre;
    }elseif ($questao6 == $op4){
        $total = $total + $investSup;
    }

    if ($questao7 == $op1){
        $total = $total + $investCons;
    }elseif ($questao7 == $op2){
        $total = $total + $investMod;
    }elseif ($questao7 == $op3){
        $total = $total + $investAgre;
    }elseif ($questao7 == $op4){
        $total = $total + $investSup;
    }

    if ($questao8 == $op1){
        $total = $total + $investCons;
    }elseif ($questao8 == $op2){
        $total = $total + $investMod;
    }elseif ($questao8 == $op3){
        $total = $total + $investAgre;
    }elseif ($questao8 == $op4){
        $total = $total + $investSup;
    }

    if ($questao9 == $op1){
        $total = $total + $investCons;
    }elseif ($questao9 == $op2){
        $total = $total + $investMod;
    }elseif ($questao9 == $op3){
        $total = $total + $investAgre;
    }elseif ($questao9 == $op4){
        $total = $total + $investSup;
    }

    if ($total <= 10){
        $perfil = ('Conservador');
    }elseif ($total >= 11 && $total <= 50){
        $perfil = ('Moderado');
    }elseif ($total >= 51 && $total <= 100){
        $perfil = ('Agressivo');
    }elseif ($total > 101){
        $perfil = ('Superagressivo');
    }

    echo "Perfil é: ".$perfil."<br>";

    ?>

</body>
</html>