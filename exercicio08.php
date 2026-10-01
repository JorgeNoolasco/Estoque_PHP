<?php
// Exercício 08 — Relatório completo de produto.
// Sete variáveis armazenam os dados cadastrados do produto.
$nomeProduto = "Monitor 24 polegadas";
$codigo = 108;
$categoria = "Informática";
$quantidade = 12;
$valorCompra = 650.00;
$valorVenda = 900.00;
$fornecedor = "Tecnologia Minas Ltda.";

// Três variáveis armazenam os resultados dos cálculos.
$valorEstoque = $quantidade * $valorCompra;
$lucroUnitario = $valorVenda - $valorCompra;
$lucroTotal = $quantidade * $lucroUnitario;
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 08 — Relatório completo de produto</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <p>Fundamentos PHP • Controle de estoque</p>
    <h1>Exercício 08 — Relatório completo de produto</h1>
</header>
<main>
    <a class="voltar" href="index.php">Voltar ao menu</a>
    <section>
        <?php
        // Exibição do relatório usando echo e concatenação.
echo "<h2>RELATÓRIO ESTOQUE</h2>";
echo "<p><strong>Produto:</strong> " . $nomeProduto . "</p>";
echo "<p><strong>Código:</strong> " . $codigo . "</p>";
echo "<p><strong>Categoria:</strong> " . $categoria . "</p>";
echo "<p><strong>Fornecedor:</strong> " . $fornecedor . "</p>";
echo "<p><strong>Quantidade:</strong> " . $quantidade . "</p>";
echo "<p><strong>Valor de compra:</strong> R$ " . number_format($valorCompra, 2, ",", ".") . "</p>";
echo "<p><strong>Valor de venda:</strong> R$ " . number_format($valorVenda, 2, ",", ".") . "</p>";
echo "<p><strong>Valor investido:</strong> R$ " . number_format($valorEstoque, 2, ",", ".") . "</p>";
echo "<p><strong>Lucro unitário:</strong> R$ " . number_format($lucroUnitario, 2, ",", ".") . "</p>";
echo "<p><strong>Lucro previsto:</strong> R$ " . number_format($lucroTotal, 2, ",", ".") . "</p>";
        ?>
    </section>
    <section>
        <h2>Perguntas de fixação</h2>
        <div class="resposta">
            <h3>1. Quantas variáveis foram utilizadas?</h3>
            <p>Foram utilizadas 10 variáveis: 7 de cadastro e 3 de cálculo.</p>
        </div>
        <div class="resposta">
            <h3>2. Qual variável representa uma informação calculada?</h3>
            <p>$valorEstoque representa uma informação calculada. $lucroUnitario e $lucroTotal também são resultados de cálculos.</p>
        </div>
        <div class="resposta">
            <h3>3. Qual a vantagem de separar informações em variáveis?</h3>
            <p>Facilita entender o código, alterar os dados e reutilizar os valores sem repetir informações.</p>
        </div>
    </section>
</main>
<footer>Atividade prática — Desenvolvimento de Sistemas Web</footer>
</body>
</html>
