<?php
session_start
if(isset($_SESSION['nao_autenticado']));
?>
<p>ERRO: Usuário ou senha inválidos.</p>
<?php
unset($_SESSION['nao_autenticado']);
endif;
unset($_SESSION['nao_autenticado']);
?>