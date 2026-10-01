<?php
// Exercício 01 — Cadastro básico de produto.
// Dados do produto: textos são string e números inteiros são int.
$nomeProduto = "Notebook Dell";
$codigoProduto = 101;
$categoria = "Informática";
$quantidadeDisponivel = 15;
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 01 — Cadastro básico de produto</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <p>Fundamentos PHP • Controle de estoque</p>
    <h1>Exercício 01 — Cadastro básico de produto</h1>
</header>
<main>
    <a class="voltar" href="index.php">Voltar ao menu</a>
    <section>
        <?php
        // Exibição do relatório usando echo e concatenação.
echo "<h2>RELATÓRIO DE PRODUTO</h2>";
echo "<p><strong>Produto:</strong> " . $nomeProduto . "</p>";
echo "<p><strong>Código:</strong> " . $codigoProduto . "</p>";
echo "<p><strong>Categoria:</strong> " . $categoria . "</p>";
echo "<p><strong>Quantidade em estoque:</strong> " . $quantidadeDisponivel . "</p>";
        ?>
    </section>
    <section>
        <h2>Perguntas de fixação</h2>
        <div class="resposta">
            <h3>1. Qual comando PHP inicia um código PHP?</h3>
            <p>A tag de abertura &lt;?php inicia o bloco de código PHP.</p>
        </div>
        <div class="resposta">
            <h3>2. Qual variável representa um texto?</h3>
            <p>$nomeProduto e $categoria armazenam textos, do tipo string.</p>
        </div>
        <div class="resposta">
            <h3>3. Por que utilizamos o símbolo $ antes do nome da variável?</h3>
            <p>Porque o PHP usa o símbolo $ para identificar uma variável.</p>
        </div>
        <div class="resposta">
            <h3>4. Qual comando é utilizado para mostrar informações na tela?</h3>
            <p>O comando echo exibe informações na tela.</p>
        </div>
    </section>
</main>
<footer>Atividade prática — Desenvolvimento de Sistemas Web</footer>
</body>
</html>
