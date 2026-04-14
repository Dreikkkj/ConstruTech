<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtos - ConstruTech</title>
    <link rel="stylesheet" href="./css/eloahcss/cadastro.css">
    <link rel="icon" href="./fotos/logoConstruTech.png">

    <!-- Fontes -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Google+Sans:ital,opsz,wght@0,17..18,400..700;1,17..18,400..700&family=Lexend+Deca:wght@100..900&display=swap" rel="stylesheet">

</head>

<body>

    <div class="box">
        <div class="cadastro-box">
            <div class="sub">
                <div class="titulo-flex">
                    <img src="./fotos/icone.png" alt="Ícone de Cadastro">
                    <h1 class="sub1">Cadastro de Produtos</h1>
                </div>
                <p>Adicione novos itens ao estoque da ConstruTech</p>
            </div>
        </div>


        <div class="box2">
            <form action="cadastro.php" method="POST">

                <div class="linha-inputs">
                    <div class="inputBox box-nome">
                        <label for="nome" class="labelInput">Nome do Produto <span class="asterisco">*</span></label>
                        <input type="text" placeholder="Ex: Cimento CP-II 50kg" name="nome" id="nome" class="inputUser" required>
                    </div>

                    <div class="inputBox box-categoria">
                        <label for="categoria" class="labelInput">Categoria <span class="asterisco">*</span></label>
                        <select name="categoria" id="categoria" class="inputUser" required>
                            <option value="">Selecione uma categoria</option>
                            <option value="Cimento">Bruto</option>
                            <option value="Aço">Ferramentas</option>
                            <option value="Madeira">Acabamento</option>
                        </select>
                    </div>
                </div>

                <div class="linha-inputs">
                    <div class="inputBox">
                        <label for="descricao" class="labelInput">Quantidade <span class="asterisco">*</span></label>
                        <input type="number" placeholder="0" name="descricao" id="descricao" class="inputUser" required>
                    </div>

                    <div class="inputBox">
                        <label for="quantidade" class="labelInput">Preço Unitário (R$) <span class="asterisco">*</span></label>
                        <input type="number" placeholder="R$ 0,00" step="0.01" name="quantidade" id="quantidade" class="inputUser" required>
                    </div>

                    <div class="inputBox">
                        <label for="localizacao" class="labelInput">Estoque mínimo</label>
                        <input type="number" placeholder="5" name="localizacao" id="localizacao" class="inputUser" required>
                    </div>
                </div>

                <div class="teste">
                    <label for="imagem" class="labelInput">Imagem do Produto <span style="color: #888; font-size: 14px;">(opcional)</span></label>

                    <div class="container-upload">
                        <div class="caixa-imagem">
                            <img src="./fotos/imagecadastro.png" alt="Imagem do Produto" class="imagem-preview" id="imagemPreview">
                        </div>

                        <input type="file" id="imagem" name="imagem" accept="image/*" class="input-arquivo">
                    </div>

                    <button class="btn" type="submit" name="submit" id="submit">+ Cadastrar Produto</button>
                </div>
            </form>
        </div>
    </div>

    </div>

</body>

</html>