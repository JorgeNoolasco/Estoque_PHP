<?php
// Exercício 03 — Cadastro de fornecedor.
// CNPJ e telefone são textos: possuem formatação e podem começar com zero.
// Dados fictícios usados somente neste exercício.
$nomeFornecedor = "Tecnologia Minas Ltda.";
$cnpj = "00.000.000/0001-00";
$cidade = "Belo Horizonte";
$telefone = "(31) 3333-4444";
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 03 — Cadastro de fornecedor</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <p>Fundamentos PHP • Controle de estoque</p>
    <h1>Exercício 03 — Cadastro de fornecedor</h1>
</header>
<main>
    <a class="voltar" href="index.php">Voltar ao menu</a>
    <section>
        <?php
        // Exibição do relatório usando echo e concatenação.
echo "<h2>CADASTRO DE FORNECEDOR</h2>";
// O ponto concatena (junta) o texto com o conteúdo da variável.
echo "<p><strong>Nome:</strong> " . $nomeFornecedor . "</p>";
echo "<p><strong>CNPJ:</strong> " . $cnpj . "</p>";
echo "<p><strong>Cidade:</strong> " . $cidade . "</p>";
echo "<p><strong>Telefone:</strong> " . $telefone . "</p>";
        ?>
    </section>
    <section>
        <h2>Perguntas de fixação</h2>
        <div class="resposta">
            <h3>1. Qual tipo de dado deve ser usado para telefone?</h3>
            <p>String, pois o telefone é uma informação textual.</p>
        </div>
        <div class="resposta">
            <h3>2. Por que telefone normalmente não deve ser armazenado como número?</h3>
            <p>Porque não fazemos cálculos com ele e precisamos preservar zeros iniciais, DDD, parênteses, hífens e o sinal +.</p>
        </div>
        <div class="resposta">
            <h3>3. Explique a função da concatenação no PHP.</h3>
            <p>A concatenação junta textos e valores em uma mesma mensagem. No PHP, usamos o operador ponto (.).</p>
        </div>
    </section>
</main>
<footer>Atividade prática — Desenvolvimento de Sistemas Web</footer>
</body>
</html>
