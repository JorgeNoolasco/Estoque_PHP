<?php
// Exercício 07 — Status do estoque.
$quantidadeEstoque = 20;

// A comparação produz um boolean: true ou false.
$estoqueAdequado = $quantidadeEstoque > 20;

// Mais de 20 unidades é normal; 20 ou menos precisa de reposição.
if ($estoqueAdequado) {
    $situacao = "Estoque normal";
} else {
    $situacao = "Necessário reposição";
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 07 — Status do estoque</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="logo.png" type="image/x-icon">
</head>
<body>
<header>
    <p>Fundamentos PHP • Controle de estoque</p>
    <h1>Exercício 07 — Status do estoque</h1>
</header>
<main>
    <a class="voltar" href="index.php">Voltar ao menu</a>
    <section>
        <?php
        // Exibição do relatório usando echo e concatenação.
echo "<h2>STATUS DO ESTOQUE</h2>";
echo "<p><strong>Quantidade em estoque:</strong> " . $quantidadeEstoque . "</p>";
echo "<p><strong>Situação:</strong> " . $situacao . "</p>";
echo "<p><strong>Estoque adequado (boolean):</strong> " . ($estoqueAdequado ? "true" : "false") . "</p>";
        ?>
    </section>
    <section>
        <h2>Perguntas de fixação</h2>
        <div class="resposta">
            <h3>1. Qual estrutura de programação será necessária?</h3>
            <p>A estrutura condicional if/else.</p>
        </div>
        <div class="resposta">
            <h3>2. Para que serve uma condição?</h3>
            <p>Para verificar uma regra e escolher o que o programa deve fazer.</p>
        </div>
        <div class="resposta">
            <h3>3. Cite um exemplo de decisão em um sistema real.</h3>
            <p>Uma loja permite uma venda se houver estoque suficiente. Caso contrário, informa que o produto está indisponível.</p>
        </div>
    </section>
</main>

<button class="proximo" onclick="window.location.href='exercicio08.php'">Próximo Exercício</button>

<footer>Atividade prática — Desenvolvimento de Sistemas Web</footer>
</body>
</html>
