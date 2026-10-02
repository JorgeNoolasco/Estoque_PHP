<?php
// Exercício 06 — Controle financeiro do estoque.
$quantidadeVendida = 10;
$valorCompra = 120.00; // Custo de compra de uma unidade.
$valorVenda = 180.00; // Preço de venda de uma unidade.

// Fórmula solicitada: diferença entre venda e compra por unidade.
$lucro = $valorVenda - $valorCompra;

// Multiplicamos os valores unitários pela quantidade vendida.
$valorComprado = $quantidadeVendida * $valorCompra;
$valorVendido = $quantidadeVendida * $valorVenda;
$lucroEstimado = $quantidadeVendida * $lucro;
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 06 — Controle financeiro do estoque</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="logo.png" type="image/x-icon">
</head>
<body>
<header>
    <p>Fundamentos PHP • Controle de estoque</p>
    <h1>Exercício 06 — Controle financeiro do estoque</h1>
</header>
<main>
    <a class="voltar" href="index.php">Voltar ao menu</a>
    <section>
        <?php
        // Exibição do relatório usando echo e concatenação.
echo "<h2>CONTROLE FINANCEIRO</h2>";
echo "<p><strong>Quantidade vendida:</strong> " . $quantidadeVendida . "</p>";
echo "<p><strong>Compra por unidade:</strong> R$ " . number_format($valorCompra, 2, ",", ".") . "</p>";
echo "<p><strong>Venda por unidade:</strong> R$ " . number_format($valorVenda, 2, ",", ".") . "</p>";
echo "<p><strong>Valor comprado:</strong> R$ " . number_format($valorComprado, 2, ",", ".") . "</p>";
echo "<p><strong>Valor vendido:</strong> R$ " . number_format($valorVendido, 2, ",", ".") . "</p>";
echo "<p><strong>Lucro por unidade:</strong> R$ " . number_format($lucro, 2, ",", ".") . "</p>";
echo "<p><strong>Lucro estimado:</strong> R$ " . number_format($lucroEstimado, 2, ",", ".") . "</p>";
echo "<p>Estimativa considerando apenas compra e venda, sem outros custos.</p>";
        ?>
    </section>
    <section>
        <h2>Perguntas de fixação</h2>
        <div class="resposta">
            <h3>1. O que representa uma variável?</h3>
            <p>Uma variável guarda um valor identificado por um nome, que pode mudar durante a execução.</p>
        </div>
        <div class="resposta">
            <h3>2. Qual a diferença entre armazenar informação e calcular informação?</h3>
            <p>Armazenar é guardar um valor, como o preço de compra. Calcular é usar valores em operações para obter um resultado, como o lucro.</p>
        </div>
        <div class="resposta">
            <h3>3. Por que sistemas utilizam variáveis?</h3>
            <p>Para guardar dados e usar esses dados em cálculos, condições e relatórios.</p>
        </div>
    </section>
</main>
<footer>Atividade prática — Desenvolvimento de Sistemas Web</footer>

<button class="proximo" onclick="window.location.href='exercicio07.php'">Próximo Exercício</button>

</body>
</html>
