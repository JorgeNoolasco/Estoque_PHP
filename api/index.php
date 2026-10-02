<?php
// A Vercel executa esta função para o menu e para os dez exercícios.
header('Content-Type: text/html; charset=UTF-8');

if (isset($_GET['exercicio'])) {
    $exercicio = $_GET['exercicio'];

    // Aceita somente os arquivos conhecidos, sem permitir caminhos arbitrários.
    if (!is_string($exercicio) || !preg_match('/\A(?:0[1-9]|10)\z/', $exercicio)) {
        http_response_code(404);
        echo '<h1>Exercício não encontrado</h1>';
        exit;
    }

    require dirname(__DIR__) . '/exercicio' . $exercicio . '.php';
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fundamentos PHP — Estoque</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="logo.png" type="image/x-icon">
</head>
<body>
<header>
    <h1>Desenvolvimento de Sistemas Web</h1>
    <p>Nome 1: Jorge Victor</p>
    <p>Nome 2: Maria Antonia</p>
    <h1>Sistema de controle de estoque</h1>
    <p>Atividade prática — Fundamentos PHP</p>
</header>
<main>
    <section>
        <h2>Exercícios</h2>
        <p>Escolha um exercício para consultar o resultado e as respostas.</p>
        <p>Os dados são definidos nas variáveis de cada arquivo PHP. Edite esses valores no VS Code para testar outros resultados.</p>
    </section>
    <nav aria-label="Lista de exercícios">
        <a href="exercicio01.php"><span>Exercício 01</span>Cadastro básico de produto</a>
        <a href="exercicio02.php"><span>Exercício 02</span>Controle de quantidade em estoque</a>
        <a href="exercicio03.php"><span>Exercício 03</span>Cadastro de fornecedor</a>
        <a href="exercicio04.php"><span>Exercício 04</span>Cálculo do valor total do estoque</a>
        <a href="exercicio05.php"><span>Exercício 05</span>Relatório de movimentação</a>
        <a href="exercicio06.php"><span>Exercício 06</span>Controle financeiro do estoque</a>
        <a href="exercicio07.php"><span>Exercício 07</span>Status do estoque</a>
        <a href="exercicio08.php"><span>Exercício 08</span>Relatório completo de produto</a>
        <a href="exercicio09.php"><span>Exercício 09</span>Dashboard simples de estoque</a>
        <a href="exercicio10.php"><span>Exercício 10</span>Sistema integrado de estoque</a>
    </nav>
</main>
<footer>10 exercícios  Variáveis, cálculos e relatórios</footer>
</body>
</html>
