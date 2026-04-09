<!-- andrei -->
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resumo Financeiro</title>
    <link rel="stylesheet" href="./css/style.css">
    <!-- Fontes -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Google+Sans:ital,opsz,wght@0,17..18,400..700;1,17..18,400..700&family=Lexend+Deca:wght@100..900&display=swap"
        rel="stylesheet">
</head>

<body>
    <?php
    require_once './partials/header.php';
    ?>

    <div class="conteiner-box">
        <span class="icon-resumo"><img src="./src/icons/financa.png" alt="Ícone de Resumo">
        </span>
        <h2>Resumo Financeiro</h2>
        <p>Visão geral do valor investido no estoque.</p>
    </div>
    <div class="conteiner-valores">
        <span class="icon-coin"><img src="./src/icons/coin1.png" alt="Ícone de Moeda"></span>
        <div class="valor-estoque">
            <h3>Valor Total em Estoque</h3>
            <!--Colocar php aqui no valor-->
            <p>R$ 10.000,00</p>
        </div>
        <div class="total-unidades">
            <span class="icon-unidades"><img src="./src/icons/cube.png" alt="Ícone de Unidades"></span>
            <h3>Valor Médio por Item</h3>
            <p>R$ 500,00</p>
        </div>
        <div class="produtos-cadastrados">
            <span class="icon-produtos"><img src="./src/icons/list.png" alt="Ícone de Produtos"></span>
            <h3>Valor do Estoque Atual</h3>
            <p>R$ 8.000,00</p>
        </div>
    </div>
    <div class="valor-categoria">
        <span class="icon-categoria"><img src="./src/icons/graph.png" alt="Ícone de Categoria"></span>
        <h3>Valor por Categoria</h3>
        <p>R$ 4.000,00 - Materiais de Construção</p>
        <p>R$ 2.000,00 - Ferramentas</p>
    </div>
    <div class="tier-list">
        <span class="icon-tier"><img src="./src/icons/trofeu.png" alt="Ícone de troféu"></span>
        <h3>Top 5 Produtos por Valor</h3>
        <p>Produtos mais valiosos: Cimento, Aço, Tinta</p>
    </div>

</body>

</html>