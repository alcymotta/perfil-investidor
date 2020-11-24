<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta name="viewport" content="width-device-width, initial-scale=1">
    <meta charset="UTF-8">
    <title>Qual seu perfil de investidor?</title>
    <link rel="stylesheet" href="../../css/stylePainel.css">
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
                <h3>Olá, <?php echo $_SESSION['nome'];?></h3>
                <p>Caso ainda não tenha feito o teste para saber qual seu tipo de perfil ou queira atualizar, basta clicar no botão abaixo.</p>
                <a href="quiz2.html" class="btn">Faça o teste</a>
                <br><br><p>O seu perfil de investidor é: <b><?php echo $_SESSION['perfil'];?></b>, e abaixo temos algumas opções de investimentos aconselháveis de acordo com o seu perfil</p>
            </div>
        </div>
    </section>

    <!-- Investimentos -->
    <section class="sec investimentos" id="investimentos">
        <div class="content">
            <div class="investBx">
                <?php if($_SESSION['perfil'] == 'Conservador'){ ?>
                <div class="invest">
                    <a href="#">
                        <h2>Tesouro Direto</h2>
                        <h6>Tesouro Selic<br>Tesouro IPCA<br>Tesouro Prefixado</h6>
                    </a>
                </div>
                <div class="invest">
                    <a href="#">
                        <h2>Renda Fixa Privada<br></h2>
                        <h6>CDB - Certificado de Depósito Bancário<br>LCI - Letra de Crédito Imobiliário<br>LCA - Letra de Crédito do Agronegócio</h6>
                    </a>
                </div>
                <div class="invest">
                    <a href="#">
                        <h2>Fundos Renda Fixa</h2>
                        <h6>Fundo de Renda Fixa Referenciados DI<br>Fundo de Renda Fixa</h6>
                    </a>
                </div>
                <?php } ?>
                <?php if($_SESSION['perfil'] == 'Moderado'){ ?>
                <div class="invest">
                    <a href="#">
                        <h2>Fundos Imobiliários</h2>
                        <h6>Fundos de Renda<br>Fundos de Compra e Venda<br>Fundos de Tijolo</h6>
                    </a>
                </div>
                <div class="invest">
                    <a href="#">
                        <h2>Fundos Multimercados</h2>
                        <h6>Alocação<br>Estratégia<br>Investimento no exterior</h6>
                    </a>
                </div>
                <div class="invest">
                    <a href="#">
                        <h2>Debêntures</h2>
                        <h6>Debêntures Nominativas<br>Debêntures Escriturais<br>Debêntures Prefixadas<br>Debêntures Pós-Fixadas</h6>
                    </a>
                </div>
                <div class="invest">
                    <a href="#">
                        <h2>Fundo de Ações</h2>
                        <h6>Ações Nacionais<br>Ações Internacionais<br></h6>
                    </a>
                </div>
                <?php } ?>
                <?php if($_SESSION['perfil'] == 'Agressivo'){ ?>
                    <div class="invest">
                    <a href="#">
                        <h2>Ações da Bolsa/h2>
                        <h6></h6>
                    </a>
                </div>    
                <div class="invest">
                    <a href="#">
                        <h2>Derivativos</h2>
                        <h6>Contratos a termo<br>Contratos Futuros<br>Opções</h6>
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
                        <h2>Criptomoedas</h2>
                        <h6>Bitcoin<br>Litecoin<br>Ripple<br>Ethereum<br>Stellar Lumens</h6>
                    </a>
                </div>
                <?php } ?>                
            </div>
        </div>
    </section>
            <div class="sci">
                <ul>
                    <li><a href="#"><img src="../../img/facebook.png"></a></li>
                    <li><a href="#"><img src="../../img/twitter.png"></a></li>
                    <li><a href="#"><img src="../../img/instagram.png"></a></li>
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