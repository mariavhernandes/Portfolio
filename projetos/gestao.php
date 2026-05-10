<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projetos | Sistema de Gestão</title>

    <link rel="icon" type="image/png" href="../img/MV.png">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/projetosweb.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <header>
    <?php include '../includes/navbar.php'; ?>
    </header>

    <section class="pagina-projeto">

        <div class="projeto-container">
            <div class="texto-projeto">
                <a href="javascript:history.back()" class="voltar">
                    <img src="../img/seta3.png" width="60" height="60" alt="seta" class="seta">
                </a>

                <h1>Sistema de Gestão de Cadastro</h1>

                <p>
                O site foi criado para auxiliar o cadastro de pessoas e produtos, guardando os dados em uma tabela, podendo ser alterados quando quiser. Além disso, possui um sistema de internacionalização, alterando todo o site para o idioma escolhido
                </p>

                <br><br>

                <h1>Funcionalidades</h1>

                <ul>
                    <li>Cadastrar pessoas e produtos ao banco de dados</li>
                    <li>Internacionalização de idiomas</li>
                    <li>Acessar o sistema por meio de login único</li>
                </ul>

                <br><br>

                <h1>Tecnologias Utilizadas</h1>

                <ul>
                    <li>HTML5, CSS3</li>
                    <li>PHP</li>
                    <li>MySQL</li>
                </ul>

                <br>

                <a href="https://github.com/mariavhernandes/GestaoCadastro" class="botao github" target="_blank" rel="noopener">
                    <img src="../img/github_logo.png" style="width: 20px; height: 20px" alt="github"> Ver Código
                </a>
            </div>


            <div class="imagens-projeto">
                <img src="../img/gestao1.png">
                <img src="../img/gestao2.png">
                <img src="../img/gestao3.png">
            </div>
        </div>

    </section>

    <?php include '../includes/footer.php'; ?>

</body>
</html>