<?php
// 1. Carrega os dados
include '../dados.php';

// 2. Pega o ID da URL (ex: guia.php?id=jiboia)
// Se não tiver ID, define um padrão ou erro
$id = $_GET['id'] ?? null;

if (!$id || !isset($guias[$id])) {
    die("Guia não encontrado!");
}

$guiaAtual = $guias[$id];
?>

<!-- 3. Inclui o cabeçalho -->
<?php include '../includes/header.php'; ?>

<!-- Conteúdo Dinâmico -->
<section class="descricao">
    <div class="titulo">
        <h2><?php echo $guiaAtual['titulo']; ?></h2> 
        <h3><?php echo $guiaAtual['autor']; ?></h3>
    </div>
    <div class="painel-fundo">
        <img src="<?php echo $guiaAtual['imagem']; ?>" alt="Imagem do guia">
    </div>
</section>

<nav>
    <aside>Espaço para anunciante</aside>
    <section class="navbar">
        <h3>Categoria</h3>
        <p><?php echo $guiaAtual['categoria']; ?></p>
        <a href="../index.php">Voltar ao Início  
            <i class="fa-solid fa-arrow-up-right-from-square"></i>
        </a>
    </section>
</nav>

<main>
    <section class="conteudo">
        <!-- Aqui imprimimos o HTML que está salvo no array -->
        <?php echo $guiaAtual['conteudo']; ?>
    </section>
</main>
        
<!-- 4. Inclui o rodapé -->
<?php include '../includes/footer.php'; ?>