<?php
require_once './init.php';

$categoria_get = isset($_GET['categoria']) ?
    trim($_GET['categoria']) : '';
?>

<!DOCTYPE html>
    <html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Movimentação</title>
        <!-- fontes -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Google+Sans:ital,opsz,wght@0,17..18,400..700;1,17..18,400..700&family=Lexend+Deca:wght@100..900&display=swap"
            rel="stylesheet">

        <link rel="stylesheet" href="./style.css">
    </head>

    <body>
        <?php
        require_once './partials/header.php';
        ?>
        <div class="conteiner-box">
            <div class="maintitle">
                <h2 class="movh2"><img src="./src/icons/movi.png" alt="Ícone de Movimentação" class="icon7">Movimentação
                </h2>
                <p class="movp">Adicione ou remova unidades de produtos existentes.</p>
            </div>
            <div class="produto-lista">
                <?php
                foreach ($_SESSION['produtos'] as $produto) {
                    if ($categoria_get === '' || ($produto['categoria'] ?? '') === $categoria_get) {
                        $nome = $produto['nome'] ?? 'Sem nome';
                        $categoria = $produto['categoria'] ?? '';
                        $estoque = $produto['estoque'] ?? 0;
                ?>
                    <div class="cimento">
                        <h3><?php echo $nome; ?></h3>
                        <p class="categoria"><?php echo $categoria; ?></p>
                        <p class="qntd-estoque"><span><?php echo $estoque; ?></span> Em estoque</p>
                        <div class="botoes">
                            <button class="add">+ Entrada</button>
                            <button class="remove">- Saída</button>
                        </div>
                    </div>
                <?php
                    }
                }
                ?>
            </div>
        </div>
    </body>

    </html>