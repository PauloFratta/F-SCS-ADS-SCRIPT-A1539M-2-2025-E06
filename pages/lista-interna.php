<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Template para a navegação dos guias</title>
    <link rel="stylesheet" href="../assets/CSS/navegacao.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> 
    <link rel="shortcut icon" href="../assets/img/icone.ico" type="image/x-icon">
</head>
<body>
    <span class="whatsapp">
        <a href="https://wa.me/5511955334422" target="_blank">
            <i class="fa-solid fa-phone-flip"></i>
        </a>
    </span>
    <div class="grid-container">
        <header>
            <a class="logotipo" href="../index.php">
                <img src="../assets/img/Logo-Brotaqui.png" alt="Logo do site"> <!--Logotipo-->
                <h1>BROTAQUI!</h1>
            </a>
            <section class="searchBar">
                <form method="get">
                    <input type="search" name="src_tutorial" id="srcTutorial" class="barraBusca" placeholder="Filtrar por tutoriais..." required>
                    <button type="submit">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        Buscar
                    </button>
                </form>
            </section>
        </header>

        <nav>
            <aside>Espaço para anunciante</aside>
            <section class="navbar">
                <h3>Menu de Opções</h3>
                <div class="navbar-item">
                    <a href="../index.php">
                        <i class="fa-solid fa-house"></i>
                        <h4>Página Inicial</h4>
                    </a>
                </div>
                <div class="navbar-item">
                    <a href="">
                        <i class="fa-solid fa-share-nodes"></i>
                        <h4>Comunidade</h4>
                    </a>
                </div>
                <div class="navbar-item">
                    <a href="./lista-manutencao.php">
                        <i class="fa-solid fa-screwdriver-wrench"></i>
                        <h4>Manutenção</h4>
                    </a>
                </div>
                <div class="navbar-item">
                    <a href="">
                        <i class="fa-solid fa-question"></i>
                        <h4>Dúvidas</h4>
                    </a>
                </div>
            </section>
        </nav>

        <main>
            <h2>Guias: Área Interna</h2>
            
            <section class="main-container">
                <a href="guia.php?id=jiboia" class="ancora"></a>
                <div class="thumbnail"><img src="../assets/img/placeholder.jpeg" alt="Jiboia"></div>
                <div class="descricao">
                    <h2>Como cultivar Jiboia</h2>
                    <h3>Autor: Daniel | 20 Nov 2025</h3>
                    <p>A Jiboia é uma planta excelente para apartamentos. Aprenda a cuidar dela...</p>
                    <a href="guia.php?id=jiboia">Ler mais...</a>
                </div>
            </section>

            <section class="main-container">
                <a href="guia.php?id=zamioculca" class="ancora"></a>
                <div class="thumbnail"><img src="../assets/img/placeholder.jpeg" alt="Zamioculca"></div>
                <div class="descricao">
                    <h2>Zamioculca: A planta resistente</h2>
                    <h3>Autor: Fabio | 18 Nov 2025</h3>
                    <p>Ideal para locais com pouca luz e para quem esquece de regar.</p>
                    <a href="guia.php?id=zamioculca">Ler mais...</a>
                </div>
            </section>

            <section class="main-container">
                <a href="guia.php?id=espada-sao-jorge" class="ancora"></a>
                <div class="thumbnail"><img src="../assets/img/placeholder.jpeg" alt="Espada de São Jorge"></div>
                <div class="descricao">
                    <h2>Espada de São Jorge</h2>
                    <h3>Autor: Daniel | 15 Nov 2025</h3>
                    <p>Proteção e beleza. Uma planta que purifica o ar da sua casa.</p>
                    <a href="guia.php?id=espada-sao-jorge">Ler mais...</a>
                </div>
            </section>
        </main>

        <footer>
            <section class="rodape-container">
                <article class="social-media">
                    <p class="rodape-titulo">Social</p>
                    <div class="logotipo">
                        <img src="../assets/img/Logo-Brotaqui.png" alt="Logo do site"> <!--Logotipo-->
                    </div>  
                    <ul class="icones-redes">
                        <!--Trocar por ícones dos sites-->
                        <li>
                            <a href="https://www.facebook.com/login/?locale=pt_BR" target="_blank">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/accounts/login" target="_blank">
                            <i class="fa-brands fa-instagram"></i> 
                            </a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/login/pt" target="_blank">
                                <i class="fa-brands fa-linkedin-in"></i>
                            </a>
                        </li>
                    </ul>
                </article>
                <article class="rodape-links">
                    <p class="rodape-titulo">Links</p>
                    <ul>
                        <li><a href="../index.php">Página inicial</a></li>
                        <li><a href="">Guias de Cultivo</a></li>
                        <li><a href="">Guias de Venda</a></li>
                        <li><a href="">Termos de Uso</a></li>
                    </ul>
                </article>
                <address class="info-contato">
                    <p class="rodape-titulo">Contato</p>
                    <ul>
                        <li>E-mail: brotaqui_oficial@gmail.com</li>
                        <li>Telefone: +55 (11) 95533-4422</li>
                        <li>Endereço: São Caetano do Leste, SP - Rua Consideração</li>
                    </ul>
                </address>
            </section>
            <p class="copyright">&copy; 2025 Brotaqui. Todos os direitos reservados.</p>
        </footer>
    </div>
</body>
</html>