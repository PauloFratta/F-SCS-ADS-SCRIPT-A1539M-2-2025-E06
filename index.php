<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <!--https://brotaqui.netlify.app/-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brotaqui</title>

    <!-- Meta tags: -->
    <meta name="author" content="Daniel Alexandre e Fabio Nifosse">
    <meta name="description" content="Um site para auxiliar aqueles que querem se manter saudáveis, ou apenas melhorar o seu ambiente mesmo em espaços pequenos. Ajudamos a montar uma área de plantio caseira para a sua casa ou apartamento!">
    <meta name="keywords" content="plantio, plantas, saúde, bem-estar, apartamento, casa, horta, redes sociais, comercio, comércio, frutas, legumes, vegano, mercado, hortfrut">

    <!-- Open Graph (ajuda a melhorar a apresentação do seu link ao ser compartilhado em redes sociais): -->
    <meta property="og:title" content="Brotaqui!">
    <meta property="og:description" content="Explore maneiras diferentes de como plantar dentro de casa.">
    <meta property="og:image" content="">  <!-- URL de uma imagem para exibição ao compartilhar -->
    <meta property="og:url" content="https://brotaqui.netlify.app/">
    <meta property="og:type" content="website">

    <!-- Links pro HTML: -->
    <link rel="shortcut icon" href="./assets/img/icone.ico" type="image/x-icon">
    <link rel="stylesheet" href="./assets/CSS/dashboard.css">
    <!--Fonte de ícones-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> 
    <style>
        .logotipo {
            width: 66px;
        }
        header {
            display: flex;
            align-items: center;
            gap: 15%;
        }
    </style>
</head>
<body>
    <span class="whatsapp">
        <a href="https://wa.me/5511955334422" target="_blank"><i class="fa-solid fa-phone-flip"></i></a>
    </span>
    <header>
        <a class="logotipo" href="./index.php">
            <img src="./assets/img/Logo-Brotaqui.png" alt="Logo do site">
        </a>
        <h1>BROTAQUI!</h1>
        <h2>"Um lugar para cultivar..."</h2>
    </header>
    
    <nav class="navbar"> 
        <div class="nav-item">
            <span class="nav-link">Guias de Cultivo</span>
            <div class="dropdown-menu">
                <ul>
                    <li><a href="./pages/lista-interna.php"><i>1.1 Área Interna</i></a></li>
                    <li><a href="./pages/lista-externa.php"><i>1.2 Área Externa</i></a></li>
                </ul>
            </div>
        </div>
        <div class="nav-item">
            <span class="nav-link">Cuidados</span>
            <div class="dropdown-menu">
                <ul>
                    <li><a href="./pages/lista-manutencao.php"><i>2.1 Manutenção</i></a></li>
                    <li><a href="./pages/lista-tecnicas.php"><i>2.2 Técnicas de Cultivo</i></a></li>
                    <li><a href="./pages/lista-problemas.php"><i>2.3 Problemas Comuns</i></a></li>
                </ul>
            </div>
        </div>
        <div class="nav-item">
            <span class="nav-link">Comercialização</span>
            <div class="dropdown-menu">
                <ul>
                    <li><a href="#"><i>3.1 Guias de Vendas</i></a></li>
                    <li><a href="#"><i>3.2 Artigos</i></a></li>
                    <li><a href="#"><i>3.3 Comunidade</i></a></li>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        <section class="searchBar">
            <form method="get">
                <input type="search" class="barraBusca" placeholder="Filtrar por tutoriais...">
                <button type="submit"><i class="fa-solid fa-magnifying-glass"></i> Buscar</button>
            </form>
        </section>

        <section class="paissagem">
            <img src="https://casaeconstrucao.vivadecora.com.br/wp-content/uploads/2020/07/horta-no-quintal-iluminado-veja-.jpg" alt="Paisagem">
            <p>Descubra como transformar pequenos espaços em grandes colheitas.</p>
        </section>

        <section class="sobre">
            <h3>Sobre Nós</h3>
            <hr>
            <p>O Brotaqui é o espaço ideal para quem deseja aprender e se aprofundar na arte da jardinagem urbana. Oferecemos conteúdos que vão desde o básico até técnicas avançadas de cultivo, ajudando você a transformar sua casa ou apartamento em um ambiente mais verde e cheio de vida.</p>
            <p>Aqui você aprende a plantar, cuidar e até comercializar os frutos da sua dedicação. Além disso, lançamos tutoriais sempre atualizados, pensados para serem práticos, acessíveis e voltados ao público em geral.</p>
            <p>Também valorizamos a troca de experiências: aceitamos ideias de cultivo e compartilhamos cada nova descoberta com nossa comunidade.</p>
            <p>Então, <em>brotaqui</em> e venha fazer parte desse movimento você também!</p>
        </section>

        <section class="container">
            <article class="novidades">
                <h3><i class="fa-solid fa-star"></i> Novidades</h3>
                <hr>
                <div class="grid-container">
                    <div class="banner">
                        <a href="pages/guia.php?id=alface"> 
                            <img src="./assets/img/horta.png" alt="Banner">
                            <span>Novo: Como plantar Alface Rápido</span>
                        </a>
                    </div>
                    <div class="grid-item">
                        <a href="pages/guia.php?id=espada-sao-jorge"><img src="./assets/img/placeholder.jpeg" alt="Espada de São Jorge"></a>
                        <a href="pages/guia.php?id=cenoura"><img src="./assets/img/placeholder.jpeg" alt="Cenoura"></a>
                        <a href="pages/guia.php?id=rega"><img src="./assets/img/placeholder.jpeg" alt="Como Regar"></a>
                        <a href="pages/guia.php?id=compostagem"><img src="./assets/img/placeholder.jpeg" alt="Compostagem"></a>
                    </div>
                </div>
            </article>

            <br>

            <article>
                <h3>Interiores</h3>
                <hr>
                <div class="grid-container">
                    <div class="banner">
                        <a href="./pages/lista-interna.php">
                            <img src="./assets/img/horta.png" alt="Banner Interno">
                            <span>Ver todos de Área Interna</span>
                        </a>
                    </div>
                    <div class="grid-item">
                        <a href="pages/guia.php?id=jiboia" title="Cultivo de Jiboia"><img src="./assets/img/placeholder.jpeg" alt="Jiboia"></a>
                        <a href="pages/guia.php?id=zamioculca" title="Cultivo de Zamioculca"><img src="./assets/img/placeholder.jpeg" alt="Zamioculca"></a>
                        <a href="pages/guia.php?id=espada-sao-jorge" title="Espada de São Jorge"><img src="./assets/img/placeholder.jpeg" alt="Espada de São Jorge"></a>
                        <a href="pages/guia.php?id=jiboia"><img src="./assets/img/placeholder.jpeg" alt="Extra"></a>
                    </div>
                </div>
            </article>

            <br>

            <article>
                <h3>Exteriores</h3>
                <hr>
                <div class="grid-container">
                    <div class="banner">
                        <a href="./pages/lista-externa.php">
                            <img src="./assets/img/horta.png" alt="Banner Externo">
                            <span>Ver todos de Área Externa</span>
                        </a>
                    </div>
                    <div class="grid-item">
                        <a href="pages/guia.php?id=tomate" title="Tomate Cereja"><img src="./assets/img/placeholder.jpeg" alt="Tomate"></a>
                        <a href="pages/guia.php?id=cenoura" title="Cenouras em Vaso"><img src="./assets/img/placeholder.jpeg" alt="Cenoura"></a>
                        <a href="pages/guia.php?id=alface" title="Alface Crespa"><img src="./assets/img/placeholder.jpeg" alt="Alface"></a>
                        <a href="pages/guia.php?id=tomate"><img src="./assets/img/placeholder.jpeg" alt="Extra"></a>
                    </div>
                </div>
            </article>
        </section>
    </main>

    <footer>
        <section class="rodape-container">
            <article class="social-media">
                <p class="rodape-titulo">Social</p>
                <div class="logotipo">
                    <img src="./assets/img/Logo-Brotaqui.png" alt="Logo do site"> <!--Logotipo-->
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
</body>
</html>