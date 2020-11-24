 <?php

if(isset($_POST['emailid']) && !empty($_POST['emailid'])){
$nome = addcslashes($_POST['nomeid']);
$email = addcslashes($_POST['emailid']);
$mensagem = addcslashes($_POST['mensagemid']);

$to = "amottajunior@outlook.com";
$subjet = "Contato - Perfil Investidor";
$body = "Nome: ".$nome. "\r\n".
        "Email: ".$email. "\r\n".
        "Mensagem: ".$mensagem;
$header = "From:contato@perfilinvestidor.com"."\r\n".
            "Reply-To:".$email."\r\n".
            "X=Mailer:PHP/".phpversion();

if(mail($to,$subjet,$body,$header)){
    echo("Email enviado com sucesso!");
}else{
    echo("Email não pode ser enviado");
}

}

?>