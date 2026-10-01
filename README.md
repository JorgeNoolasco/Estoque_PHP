# Estoque PHP — atividade resolvida

## Estrutura de pastas

Pasta principal: `C:\laragon\www\estoque_php`

```text
estoque_php/index.php
estoque_php/style.css
estoque_php/exercicio01.php
estoque_php/exercicio02.php
estoque_php/exercicio03.php
estoque_php/exercicio04.php
estoque_php/exercicio05.php
estoque_php/exercicio06.php
estoque_php/exercicio07.php
estoque_php/exercicio08.php
estoque_php/exercicio09.php
estoque_php/exercicio10.php
estoque_php/respostas.md
estoque_php/README.md
```

## Como executar no Laragon

1. Extraia o ZIP e copie a pasta `estoque_php` para `C:\laragon\www`.
2. Abra o Laragon e clique em **Start All** para iniciar o servidor web com PHP.
3. Abra `http://localhost/estoque_php/` no navegador.
4. Selecione um exercício. Você também pode acessar diretamente `http://localhost/estoque_php/exercicio01.php` e trocar o número até 10.
5. Para editar, abra a pasta `estoque_php` no Visual Studio Code.

Os exercícios usam PHP e HTML, com CSS próprio. Não precisam de banco de dados, JavaScript, bibliotecas ou instalação de pacotes. Os cadastros são simulados por variáveis, conforme o enunciado. Cada arquivo executa separadamente.

## Hospedagem na Vercel

O `vercel.json` usa o runtime comunitário `vercel-php@0.9.0`. As rotas `/`, `/index.php` e `/exercicio01.php` até `/exercicio10.php` passam pela função `api/index.php`. Ela executa o exercício solicitado usando uma lista restrita de números válidos. As regras dos exercícios ficam antes da consulta aos arquivos estáticos, evitando o download dos códigos PHP. O `style.css` continua sendo servido como CSS.

No painel da Vercel, use **Framework Preset: Other**, a raiz do repositório como **Root Directory**, e deixe as substituições de Build Command e Output Directory desativadas. Depois de integrar a alteração à branch de produção, aguarde o novo deployment ou use **Redeploy**. Teste o menu, um exercício e o botão de voltar.


## Conteúdo

Cada exercício contém dados de exemplo, comentários sobre as principais linhas, relatório e respostas das perguntas. As respostas também estão reunidas em `respostas.md`.

O exercício 06 usa a diferença entre os preços como lucro unitário e multiplica pela quantidade vendida para calcular o lucro total estimado. Nos exercícios 08 e 10, o lucro previsto considera a venda de todas as unidades. Os valores de estoque usam o custo de compra.

No exercício 07, altere `$quantidadeEstoque` para 21, 20 e 0: o resultado deverá ser, respectivamente, estoque normal, necessário reposição e necessário reposição.

## Resultados esperados com os dados fornecidos

| Exercício | Resultado principal |
|---|---|
| 01 | Notebook Dell; código 101; Informática; 15 unidades |
| 02 | 30 + 10 - 8 = 32 unidades |
| 03 | Ficha do fornecedor Tecnologia Minas Ltda. |
| 04 | 25 × R$ 80,50 = R$ 2.012,50 |
| 05 | 18 + 12 - 5 = 25 unidades; data atual |
| 06 | Compra R$ 1.200,00; venda R$ 1.800,00; lucro unitário R$ 60,00; lucro total R$ 600,00 |
| 07 | 20 unidades: Necessário reposição; boolean false |
| 08 | Estoque R$ 7.800,00; lucro unitário R$ 250,00; lucro previsto R$ 3.000,00 |
| 09 | 50 cadastrados; 45 disponíveis; 8 críticos; R$ 35.800,50 |
| 10 | Estoque R$ 37.500,00; lucro R$ 10.500,00; Necessário reposição |

## Evidências solicitadas pela atividade

Para concluir as evidências no seu computador, tire um print de cada exercício no navegador e outro do respectivo código aberto no VS Code. Os prints devem mostrar a execução real no seu ambiente Laragon.

Este pacote contém os códigos e as respostas; não contém prints do VS Code ou do navegador. Os cálculos foram conferidos, mas a execução em PHP/Laragon não foi verificada neste ambiente, que não possui PHP instalado.
