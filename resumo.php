<!-- andrei -->
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resumo Financeiro</title>
    <link rel="stylesheet" href="./style.css">
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
        <div class="maintitle">
            <h2><img src="./src/icons/financa.png" alt="Ícone de Resumo Financeiro" class="icon1">Resumo Financeiro</h2>
            <p>Visão geral do valor investido no estoque.</p>
        </div>
    </div>
    <div class="conteiner-valores">
        <div class="valor-estoque">
            <h3><img src="./src/icons/coin1.png" alt="Ícone de Moeda" class="icon2">Valor Total em Estoque</h3>
            <!--Colocar php aqui no valor-->
            <p>R$ 10.000,00</p>
        </div>
        <div class="total-unidades">
            <h3><img src="./src/icons/cube.png" alt="Ícone de Cubo" class="icon3">Total de unidades</h3>
            <p>50</p>
        </div>
        <div class="produtos-cadastrados">

            <h3><img src="./src/icons/list.png" alt="Ícone de Lista" class="icon4">Produtos cadastrados</h3>
            <p>20</p>
        </div>
    </div>
    <div class="linha-baixo">
        <div class="valor-categoria">
            <h3><img src="./src/icons/graph.png" class="icon5">Valor por Categoria</h3>
            <p>R$ 4.000,00 - Materiais de Construção</p>
            <p>R$ 2.000,00 - Ferramentas</p>
        </div>

        <div class="tier-list">
            <h3><img src="./src/icons/trofeu.png" class="icon6">Top 5 Produtos por Valor</h3>
            <p>Produtos mais valiosos: Cimento, Aço, Tinta</p>
        </div>
    </div>
</body>

</html>