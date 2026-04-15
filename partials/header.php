<header>
    <nav>
        <ul class="menu-superior">
            <div class="logo">
                <img src="./src/fotos/logoconstrutechandrei.png" alt="Logo da Loja">
                <h1 class="font-cursiva">ConstruTech</h1>
            </div>
            <ul>
                <li><a href="./cadastro.php" <?php if(basename($_SERVER['PHP_SELF']) == 'cadastro.php') echo 'class="active"'; ?>>Cadastro</a></li>
                <li><a href="./inventario.php" <?php if(basename($_SERVER['PHP_SELF']) == 'inventario.php') echo 'class="active"'; ?>>Inventário</a></li>
                <li><a href="./alertas.php" <?php if(basename($_SERVER['PHP_SELF']) == 'alertas.php') echo 'class="active"'; ?>>Alertas</a></li>
                <li><a href="./movimentacao.php" <?php if(basename($_SERVER['PHP_SELF']) == 'movimentacao.php') echo 'class="active"'; ?>>Movimentação</a></li>
                <li><a href="./resumo.php" <?php if(basename($_SERVER['PHP_SELF']) == 'resumo.php') echo 'class="active"'; ?>>Resumo</a></li>
            </ul>
        </ul>
    </nav>
</header>