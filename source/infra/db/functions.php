<?php
include_once("../db/conexao.php");

function query_execute($query) {
    global $conexao;
    return mysqli_query($conexao, $query);
}

function userValite($usuario, $senha) {
    try {
        $query = "SELECT * FROM usuario WHERE usuario = '{$usuario}' and senha = md5('{$senha}')";
        $result = query_execute($query) or die();
        if(mysqli_num_rows($result) > 0) {
            return mysqli_fetch_assoc($result);
        }
    } catch (Exception $e) {
        echo 'Exceção capturada: ',  $e->getMessage(), "\n";
    }
}

function userData($user_id) {
    try {
        $query = "SELECT * FROM usuario WHERE id = $user_id";
        $result = query_execute($query) or die();
        if(mysqli_num_rows($result) > 0) {
            return mysqli_fetch_assoc($result);
        }
    } catch (Exception $e) {
        echo 'Exceção capturada: ',  $e->getMessage(), "\n";
    }
}

function createUser($array_post) {
    try {
        $query = "INSERT INTO usuario (nome, usuario, senha, data_cadastro) VALUES ('".$array_post['nome']."', '".$array_post['usuario']."', '".trim(md5($array_post['senha']))."', NOW())";
        query_execute($query) or die();
    } catch (Exception $e) {
        echo 'Exceção capturada: ',  $e->getMessage(), "\n";
    }
}

//function setPerfil($perfil)
//{
//    try {
//        $query = "UPDATE usuario SET perfil='$perfil' WHERE usuario='$usuario'";
//        query_execute($query) or die();
//    } catch (Exception $e) {
//        echo 'Perfil inserido: ', $e->getMessage(), "\n";
//    }
//}
?>