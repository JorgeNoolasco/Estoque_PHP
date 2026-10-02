<?php
// Exercício 05 — Relatório de movimentação.
$produto = "SSD 1 TB";
$estoqueAnterior = 18;

// Entrada: unidades recebidas que aumentam o estoque.
$entrada = 12;

// Saída: unidades vendidas ou retiradas que diminuem o estoque.
$saida = 5;

// Atualização: estoque anterior + entrada - saída.
$novoEstoque = $estoqueAnterior + $entrada - $saida;

date_default_timezone_set("America/Sao_Paulo");
$dataRelatorio = date("d/m/Y");
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 05 — Relatório de movimentação</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="logo.png" type="image/x-icon">
</head>
<body>
<header>
    <p>Fundamentos PHP • Controle de estoque</p>
    <h1>Exercício 05 — Relatório de movimentação</h1>
</header>
<main>
    <a class="voltar" href="index.php">Voltar ao menu</a>
    <section>
        <?php
        // Exibição do relatório usando echo e concatenação.
echo "<h2>RELATÓRIO DE MOVIMENTAÇÃO</h2>";
echo "<p><strong>Data:</strong> " . $dataRelatorio . "</p>";
echo "<p><strong>Produto:</strong> " . $produto . "</p>";
echo "<p><strong>Estoque anterior:</strong> " . $estoqueAnterior . "</p>";
echo "<p><strong>Entrada:</strong> " . $entrada . "</p>";
echo "<p><strong>Saída:</strong> " . $saida . "</p>";
echo "<p><strong>Novo estoque:</strong> " . $novoEstoque . "</p>";
        ?>
    </section>
    <section>
        <h2>Perguntas de fixação</h2>
        <div class="resposta">
            <h3>1. Por que comentários são importantes em um código profissional?</h3>
            <p>Eles ajudam a explicar regras e facilitam a leitura e a manutenção do código.</p>
        </div>
        <div class="resposta">
            <h3>2. Qual comando cria comentários em PHP?</h3>
            <p>Usamos // ou # para uma linha e /* ... */ para um bloco de comentários.</p>
        </div>
        <div class="resposta">
            <h3>3. Como identificar uma variável?</h3>
            <p>Ela começa com $, seguido do nome, como $produto.</p>
        </div>
    </section>
</main>
<footer>Atividade prática — Desenvolvimento de Sistemas Web</footer>

<button class="proximo" onclick="window.location.href='exercicio06.php'">Próximo Exercício</button>

</body>
</html>
