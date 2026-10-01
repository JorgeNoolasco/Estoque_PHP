<?php
// Exercício 09 — Dashboard simples de estoque.
// Dados de exemplo para uma visão geral do estoque.
// Disponíveis: produtos com pelo menos uma unidade.
// Críticos: produtos com 20 unidades ou menos, incluindo os zerados.
// Essas categorias podem se sobrepor.
$totalProdutos = 50;
$produtosDisponiveis = 45;
$produtosBaixoEstoque = 8;
$valorTotalEstoque = 35800.50;
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 09 — Dashboard simples de estoque</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <p>Fundamentos PHP • Controle de estoque</p>
    <h1>Exercício 09 — Dashboard simples de estoque</h1>
</header>
<main>
    <a class="voltar" href="index.php">Voltar ao menu</a>
    <section>
        <?php
        // Exibição do relatório usando echo e concatenação.
echo "<h2>DASHBOARD ESTOQUE</h2>";
echo "<div class='indicadores'>";
echo "<div class='indicador'><span>Produtos cadastrados</span><strong>" . $totalProdutos . "</strong></div>";
echo "<div class='indicador'><span>Produtos disponíveis</span><strong>" . $produtosDisponiveis . "</strong></div>";
echo "<div class='indicador'><span>Produtos críticos</span><strong>" . $produtosBaixoEstoque . "</strong></div>";
echo "<div class='indicador'><span>Valor total</span><strong>R$ " . number_format($valorTotalEstoque, 2, ",", ".") . "</strong></div>";
echo "</div>";
echo "<p>Os indicadores usam dados fictícios. Um produto disponível também pode estar com estoque baixo.</p>";
        ?>
    </section>
    <section>
        <h2>Perguntas de fixação</h2>
        <div class="resposta">
            <h3>1. Qual a importância dos relatórios em sistemas?</h3>
            <p>Eles organizam os dados e ajudam a acompanhar resultados e tomar decisões.</p>
        </div>
        <div class="resposta">
            <h3>2. Como variáveis ajudam na geração de relatórios?</h3>
            <p>Elas guardam os valores que serão calculados e exibidos no relatório.</p>
        </div>
        <div class="resposta">
            <h3>3. Explique como um sistema real utilizaria essas informações.</h3>
            <p>Ele buscaria os dados no banco, calcularia os indicadores e mostraria ao responsável quais produtos precisam de reposição e quanto está investido no estoque.</p>
        </div>
    </section>
</main>
<footer>Atividade prática — Desenvolvimento de Sistemas Web</footer>
</body>
</html>
