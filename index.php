<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta name="viewport" content="width-device-width, initial-scale=1">
    <meta charset="UTF-8">
    <title>Qual seu perfil de investidor?</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- HEADER -->
    <header id="header">
        <a href="#" class="logo">LOGO</a>
        <ul>
            <li><a href="#home" onclick="toggle()">home</a></li>
            <li><a href="#perfis" onclick="toggle()">perfis</a></li>
            <li>
                <a href="#investimentos" onclick="toggle()">investimentos</a></li>
            <li><a href="#contact" onclick="toggle()">contato</a></li>
            <li><a href="login.php">login</a></li>
        </ul>
        <div class="toggle" onclick="toggle()"></div>
    </header>
    <!-- Banner -->
    <section class="banner" id="home">
        <h2>Descubra seu<br><span>perfil</span><br> de investimento</h2>
    </section>
    <!-- Perfis -->
    <section class="sec" id="perfis">
        <div class="content">
            <div class="mxw800p">
                <h3>Perfil de investidor</h3>
                <p>Serve para orientar as escolhas de produtos compatíveis com seus objetivos, de acordo com a sua
                    tolerância a risco e as suas expectativas de investimento.</p>
                <a href="login.php" class="btn">Faça o teste</a>
            </div>
            <div class="perfis">
                <div class="box">
                    <div class="iconBx">
                        <img src="img/icon3.png">
                    </div>
                    <div class="content">
                        <h2>Conservador</h2>
                        <p>Se você prefere investir em produtos de baixo risco e ganhar menos, mas ganhar sempre, isso
                            indica que você tem um perfil conservador.</p>
                    </div>
                </div>
                <div class="box">
                    <div class="iconBx">
                        <img src="img/icon2.png">
                    </div>
                    <div class="content">
                        <h2>Moderado</h2>
                        <p>Não abre mão de segurança na hora de investir , mas está aberto a maiores riscos para obter
                            melhor rentabilidade, isso indica que você tem perfil moderado.</p>
                    </div>
                </div>
                <div class="box">
                    <div class="iconBx">
                        <img src="img/icon1.png">
                    </div>
                    <div class="content">
                        <h2>Agressivo</h2>
                        <p>Deseja assumir riscos mais altos na busca de uma rentabilidade mais expressiva, o seu perfil
                            pode ser agressivo.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Investimentos -->
    <section class="sec investimentos" id="investimentos">
        <div class="content">
            <div class="mxw800p">
                <h3>Investimentos</h3>
                <p>Existem diversos tipos de investimento no mercado financeiro. Você pode aplicar o seu dinheiro em
                    títulos de renda fixa, ações, fundos e assim por diante. Mas não se assuste! Escolher os melhores
                    investimentos não é difícil e nós estamos aqui para ajudar você!</p>
            </div>
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
    <!-- Contato -->
    <section class="sec contact" id="contact">
        <div class="content">
            <div class="mxw800p">
                <h3>Nos envie uma mensagem!</h3>
                <p>Estamos ansiosos para ler suas dúvidas, dicas ou qualquer outra coisa que tenha à escrever.</p>
            </div>
            <div class="contactForm">
                <form action="source/enviar.php" method="POST">
                    <div class="row100">
                        <div class="inputBx50">
                            <input type="text" id="nomeid" name="nomeid" placeholder="Nome Completo">
                        </div>
                        <div class="inputBx50">
                            <input type="text" id="emailid" name="emailid" placeholder="Endereço de e-mail">
                        </div>
                    </div>
                    <div class="row100">
                        <div class="inputBx100">
                            <textarea name="mensagemid" placeholder="Mensagem"></textarea>
                        </div>
                    </div>
                    <div class="row100">
                        <div class="inputBx100">
                            <input type="submit" name=" " value="Enviar">
                        </div>
                    </div>
                </form>
            </div>
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