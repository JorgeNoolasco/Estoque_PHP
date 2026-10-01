<?php
// Exercício 02 — Controle de quantidade em estoque.
// Quantidades de produtos são armazenadas como números inteiros.
$produto = "Mouse USB";
$quantidadeInicial = 30;
$quantidadeEntrada = 10;
$quantidadeSaida = 8;

// Somamos as entradas e descontamos as saídas.
$estoqueAtual = $quantidadeInicial + $quantidadeEntrada - $quantidadeSaida;
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 02 — Controle de quantidade em estoque</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <p>Fundamentos PHP • Controle de estoque</p>
    <h1>Exercício 02 — Controle de quantidade em estoque</h1>
</header>
<main>
    <a class="voltar" href="index.php">Voltar ao menu</a>
    <section>
        <?php
        // Exibição do relatório usando echo e concatenação.
echo "<h2>CONTROLE DE ESTOQUE</h2>";
echo "<p><strong>Produto:</strong> " . $produto . "</p>";
echo "<p><strong>Estoque inicial:</strong> " . $quantidadeInicial . "</p>";
echo "<p><strong>Entrada:</strong> " . $quantidadeEntrada . "</p>";
echo "<p><strong>Saída:</strong> " . $quantidadeSaida . "</p>";
echo "<p><strong>Estoque atual:</strong> " . $estoqueAtual . "</p>";
        ?>
    </section>
    <section>
        <h2>Perguntas de fixação</h2>
        <div class="resposta">
            <h3>1. Qual tipo de variável deve armazenar quantidade?</h3>
            <p>Para contar unidades inteiras, usamos int.</p>
        </div>
        <div class="resposta">
            <h3>2. Qual operador representa soma?</h3>
            <p>O operador +.</p>
        </div>
        <div class="resposta">
            <h3>3. Qual operador representa subtração?</h3>
            <p>O operador -.</p>
        </div>
        <div class="resposta">
            <h3>4. O que acontece se uma variável não possuir valor?</h3>
            <p>Se ela não foi definida e for acessada, o PHP gera um aviso de variável indefinida. Uma variável definida com null tem valor nulo. Por isso, devemos inicializar as variáveis antes de usá-las.</p>
        </div>
    </section>
</main>
<footer>Atividade prática — Desenvolvimento de Sistemas Web</footer>
</body>
</html>
