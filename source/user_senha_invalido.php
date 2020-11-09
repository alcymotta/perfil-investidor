<?php
if(isset($_SESSION['nao_autenticado']));
?>
<p>ERRO: Usuário ou senha inválidos.</p>
<?php
unset($_SESSION['nao_autenticado']);
endif;
?>