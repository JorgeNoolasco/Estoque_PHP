<?php
// Exercício 04 — Cálculo do valor total do estoque.
$produto = "Teclado USB";
$quantidade = 25; // int: quantidade de unidades.
$valorUnitario = 80.50; // float: valor com casas decimais.

// Multiplicamos a quantidade pelo preço de cada unidade.
$valorTotal = $quantidade * $valorUnitario;
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 04 — Cálculo do valor total do estoque</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <p>Fundamentos PHP • Controle de estoque</p>
    <h1>Exercício 04 — Cálculo do valor total do estoque</h1>
</header>
<main>
    <a class="voltar" href="index.php">Voltar ao menu</a>
    <section>
        <?php
        // Exibição do relatório usando echo e concatenação.
echo "<h2>VALOR TOTAL DO ESTOQUE</h2>";
echo "<p><strong>Produto:</strong> " . $produto . "</p>";
echo "<p><strong>Quantidade:</strong> " . $quantidade . "</p>";
// number_format apresenta os valores com duas casas decimais.
echo "<p><strong>Valor unitário:</strong> R$ " . number_format($valorUnitario, 2, ",", ".") . "</p>";
echo "<p><strong>Valor total:</strong> R$ " . number_format($valorTotal, 2, ",", ".") . "</p>";
        ?>
    </section>
    <section>
        <h2>Perguntas de fixação</h2>
        <div class="resposta">
            <h3>1. Qual tipo de variável deve armazenar valores com casas decimais?</h3>
            <p>Nesta atividade, usamos float.</p>
        </div>
        <div class="resposta">
            <h3>2. Qual operador representa multiplicação?</h3>
            <p>O operador *.</p>
        </div>
        <div class="resposta">
            <h3>3. Explique a diferença entre int e float.</h3>
            <p>Int armazena números inteiros, como 25. Float armazena números que podem ter casas decimais, como 80.50.</p>
        </div>
    </section>
</main>
<footer>Atividade prática — Desenvolvimento de Sistemas Web</footer>
</body>
</html>
