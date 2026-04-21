<!DOCETYPE html>
    <html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movimentação</title>
    <!-- fontes -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Google+Sans:ital,opsz,wght@0,17..18,400..700;1,17..18,400..700&family=Lexend+Deca:wght@100..900&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="./style.css">
</head>

    <body>
        <?php
        require_once './partials/header.php';
        ?>
        <div class="conteiner-box">
            <div class="maintitle">
                <h2 class="movh2"><img src="./src/icons/movi.png" alt="Ícone de Movimentação" class="icon7">Movimentação</h2>
                <p class="movp">Adicione ou remova unidades de produtos existentes.</p>
            </div>
            <div class="cimento">
                <h3><img src="./fotos/imagecadastro.png" alt="Cimento CP-II 5-kg">Cimento CP-II 5-kg</h3>
                <p>categoria</p>
                <P class="qntd-estoque">em estoque</P>
                <button class="add">+ Entrada</button>
                <button class="remove">- Saída</button>
            </div>
        </div>
    </body>

    </html>