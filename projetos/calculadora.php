<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projetos | Calculadora</title>

    <link rel="icon" type="image/png" href="../img/MV.png">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/projetosmobile.css">

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

                <h1>Calculadora Windows - Com Histórico</h1>

                <p>
                Esta é uma aplicação móvel desenvolvida no Android Studio que realiza operações matemáticas básicas. O grande diferencial deste projeto foi a implementação de um histórico de contas, permitindo que o usuário visualize e acompanhe as operações realizadas anteriormente durante a sessão
                </p>

                <br><br>

                <h1>Funcionalidades</h1>

                <ul>
                    <li>Operações básicas: Soma, subtração, multiplicação e divisão</li>
                    <li>Lista dedicada que armazena e exibe as contas anteriores</li>
                    <li>Layout limpo e intuitivo projetado para uma boa experiência mobile</li>
                    <li>Opção para apagar o visor atual ou todo o histórico de operações</li>
                </ul>

                <br><br>

                <h1>Tecnologias Utilizadas</h1>

                <ul>
                    <li>Android Studio</li>
                    <li>Java</li>
                    <li>XML</li>
                </ul>

                <br>

                <a href="https://github.com/mariavhernandes/Calculadora" class="botao github" target="_blank" rel="noopener">
                    <img src="../img/github_logo.png" style="width: 20px; height: 20px" alt="github"> Ver Código
                </a>
            </div>


            <div class="imagens-projeto">
                <img src="../img/calculadora1.jpeg">
                <img src="../img/calculadora2.jpeg">
                <img src="../img/calculadora3.jpeg">
            </div>
        </div>

    </section>

    <?php include '../includes/footer.php'; ?>

</body>
</html>