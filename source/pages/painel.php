<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta name="viewport" content="width-device-width, initial-scale=1">
    <meta charset="UTF-8">
    <title>Qual seu perfil de investidor?</title>
    <link rel="stylesheet" href="css/stylePainel.css">
</head>

<body>
    <!-- HEADER -->
    <header id="header">
        <a href="#" class="logo">LOGO</a>
        <ul>
            <li><a href="index.html" onclick="toggle()">home</a></li>
            <li><a href="logout.php">logout</a></li>
        </ul>
        <div class="toggle" onclick="toggle()"></div>
    </header>
    <!-- Perfis -->
    <section class="sec" id="perfis">
        <div class="content">
            <div class="mxw800p">
                <h3>Olá, <?php echo $_SESSION['usuario'];?></h3>
                <p>Caso ainda não tenha feito o teste para saber qual seu tipo de perfil ou queira atualizar, basta clicar no botão abaixo.</p><br>
                <a href="login.php" class="btn">Faça o teste</a>
                <p>O seu perfil de investidor é: <?php echo $_SESSION['perfil'];?>, e abaixo temos algumas opções de investimentos aconselháveis de acordo com o seu perfil</p>
            </div>
        </div>
    </section>

    <!-- Investimentos -->
    <section class="sec investimentos" id="investimentos">
        <div class="content">
            <div class="investBx">
                <div class="invest">
                    <a href="#">
                        <h2>Tesouro Direto</h2>
                        <h6>Tesouro Selic<br>Tesouro IPCA<br>Tesouro Prefixado</h6>
                    </a>
                </div>
                <div class="invest">
                    <a href="#">
                        <h2>CDB <br></h2>
                        <h6>Certificado de Depósito Bancário</h6>
                    </a>
                </div>
                <div class="invest">
                    <a href="#">
                        <h2>LCI</h2>
                        <h6>Letra de Crédito Imobiliário</h6>
                    </a>
                </div>
                <div class="invest">
                    <a href="#">
                        <h2>COE</h2>
                        <h6>Certificado de Operações Estruturadas</h6>
                    </a>
                </div>
                <div class="invest">
                    <a href="#">
                        <h2>Ações</h2>
                    </a>
                </div>
                <div class="invest">
                    <a href="#">
                        <h2>Fundos Imobiliários</h2>
                    </a>
                </div>
                <div class="invest">
                    <a href="#">
                        <h2>ETFs</h2>
                    </a>
                </div>
                <div class="invest">
                    <a href="#">
                        <h2>Commodities</h2>
                        <h6>Exemplo<br>Ouro <br>Petróleo</h6>
                    </a>
                </div>
            </div>
        </div>
    </section>
            <div class="sci">
                <ul>
                    <li><a href="#"><img src="img/facebook.png"></a></li>
                    <li><a href="#"><img src="img/twitter.png"></a></li>
                    <li><a href="#"><img src="img/instagram.png"></a></li>
                </ul>
            </div>
            <script type="text/javascript">
                window.addEventListener("scroll", function () {
                    var header = document.querySelector("header");
                    header.classList.toggle("sticky", window.scrollY > 0);
                })
                function toggle() {
                    var header = document.querySelector("header");
                    header.classList.toggle("active");
                }
            </script>
</body>

</html>