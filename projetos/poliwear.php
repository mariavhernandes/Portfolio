<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projetos | Poli Wear</title>

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

                <h1>Poli Wear - Loja de Camisetas Escolares</h1>

                <p>
                Poli Wear é um site desenvolvido para simplificar a compra de camisetas escolares e de cursos, substituindo o processo manual de pagamento e evitando atrasos. Ele foi projetado para resolver um problema real dentro do ambiente escolar, trazendo praticidade e organização
                </p>

                <br><br>

                <h1>Funcionalidades</h1>

                <ul>
                    <li>Catálogo de camisetas da escola</li>
                    <li>Camisetas dos cursos personalizáveis</li>
                    <li>Simulação de carrinho de compras</li>
                    <li>Layout intuitivo para alunos e professores</li>
                </ul>

                <br><br>

                <h1>Tecnologias Utilizadas</h1>

                <ul>
                    <li>HTML5, CSS3, JavaScript</li>
                    <li>Node.js (protótipo do backend)</li>
                    <li>MySQL (simulação do banco de dados)</li>
                </ul>

                <br>

                <a href="https://github.com/mariavhernandes/PoliWear" class="botao github" target="_blank" rel="noopener">
                    <img src="../img/github_logo.png" style="width: 20px; height: 20px" alt="github"> Ver Código
                </a>
            </div>


            <div class="imagens-projeto">
                <img src="../img/poliwear1.png">
                <img src="../img/poliwear2.png">
                <img src="../img/poliwear3.png">
            </div>
        </div>

    </section>

    <?php include '../includes/footer.php'; ?>

</body>
</html>