<?php
// Exercício 10 — Sistema integrado de estoque.
// Cadastro do produto usando string, int e float.
$produto = "Notebook Dell";
$codigo = 101;
$fornecedor = "Tecnologia Minas Ltda.";
$categoria = "Informática";
$quantidade = 15;
$valorCompra = 2500.00;
$valorVenda = 3200.00;

// Processamento: custo do estoque e lucro se todas as unidades forem vendidas.
$valorTotalEstoque = $quantidade * $valorCompra;
$lucroEsperado = $quantidade * ($valorVenda - $valorCompra);

// Boolean usado para decidir a situação do estoque.
$estoqueAdequado = $quantidade > 20;
if ($estoqueAdequado) {
    $situacaoEstoque = "Estoque normal";
} else {
    $situacaoEstoque = "Necessário reposição";
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 10 — Sistema integrado de estoque</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <p>Fundamentos PHP • Controle de estoque</p>
    <h1>Exercício 10 — Sistema integrado de estoque</h1>
</header>
<main>
    <a class="voltar" href="index.php">Voltar ao menu</a>
    <section>
        <?php
        // Exibição do relatório usando echo e concatenação.
echo "<h2>SISTEMA ESTOQUE</h2>";
echo "<p><strong>Produto:</strong> " . $produto . "</p>";
echo "<p><strong>Código:</strong> " . $codigo . "</p>";
echo "<p><strong>Fornecedor:</strong> " . $fornecedor . "</p>";
echo "<p><strong>Categoria:</strong> " . $categoria . "</p>";
echo "<p><strong>Quantidade:</strong> " . $quantidade . "</p>";
echo "<p><strong>Valor de compra:</strong> R$ " . number_format($valorCompra, 2, ",", ".") . "</p>";
echo "<p><strong>Valor de venda:</strong> R$ " . number_format($valorVenda, 2, ",", ".") . "</p>";
echo "<p><strong>Valor estoque:</strong> R$ " . number_format($valorTotalEstoque, 2, ",", ".") . "</p>";
echo "<p><strong>Lucro:</strong> R$ " . number_format($lucroEsperado, 2, ",", ".") . "</p>";
echo "<p><strong>Situação:</strong> " . $situacaoEstoque . "</p>";
echo "<p>O lucro é uma previsão de venda de todo o estoque, sem outros custos.</p>";
        ?>
    </section>
    <section>
        <h2>Perguntas finais de reflexão</h2>
        <div class="resposta">
            <h3>1. Qual foi a principal função das variáveis neste projeto?</h3>
            <p>Guardar os dados dos produtos e os resultados dos cálculos para montar os relatórios.</p>
        </div>
        <div class="resposta">
            <h3>2. Um sistema profissional conseguiria funcionar sem variáveis? Explique.</h3>
            <p>Neste tipo de sistema, as variáveis são fundamentais para trabalhar com dados que mudam. Mesmo quando uma linguagem não exige declarar uma variável com nome, o programa ainda precisa representar e manipular valores.</p>
        </div>
        <div class="resposta">
            <h3>3. Qual a relação entre variáveis e banco de dados?</h3>
            <p>O banco guarda os dados de forma persistente. As variáveis guardam temporariamente os valores que o programa recebe ou consulta, permitindo calcular e apresentar resultados.</p>
        </div>
        <div class="resposta">
            <h3>4. Por que sistemas precisam transformar dados em informações?</h3>
            <p>Porque dados isolados dizem pouco. Ao organizar e calcular os dados, o sistema mostra informações úteis, como o valor do estoque e a necessidade de reposição.</p>
        </div>
        <div class="resposta">
            <h3>5. Qual diferença entre um programador que apenas escreve código e um profissional que entende o problema que está resolvendo?</h3>
            <p>Quem entende o problema consegue escolher as regras e os cálculos corretos, conferir os resultados e criar uma solução que atende à necessidade do usuário.</p>
        </div>
    </section>
</main>
<footer>Atividade prática — Desenvolvimento de Sistemas Web</footer>
</body>
</html>
