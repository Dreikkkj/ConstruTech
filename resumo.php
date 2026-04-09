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
    <br><br><br><br><br><br><br>
    <div class="conteiner-box">
        <h2>Resumo Financeiro</h2>
        <p>Visão geral do valor investido no estoque.</p>
    </div>
    <div class="conteiner-valores">
        <div class="valor-estoque">
            <h3>Valor Total em Estoque</h3>
            <!--Colocar php aqui no valor-->
            <p>R$ 10.000,00</p>
        </div>
        <div class="total-unidades">
            <h3>Valor Médio por Item</h3>
            <p>R$ 500,00</p>
        </div>
        <div class="produtos-cadastrados">
            <h3>Valor do Estoque Atual</h3>
            <p>R$ 8.000,00</p>
        </div>
    </div>
    <div class="valor-categoria">
        <h3>Valor por Categoria</h3>
        <p>R$ 4.000,00 - Materiais de Construção</p>
        <p>R$ 2.000,00 - Ferrame
    </div>

</body>

</html>