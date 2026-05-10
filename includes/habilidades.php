<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Maria Victória | Habilidades</title>

    <link rel="icon" type="image/png" href="../img/MV.png">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/habilidades.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <header>
        <?php include 'navbar.php'; ?>
    </header>

    <section class="secao-habilidades revelar">
        <h1 class="titulo-habilidades">Habilidades</h1>

        <div class="cards">

            <div class="card-habilidade">
                <div class="icone">
                    <img src="../img/linguagem_icon.png" alt="Linguagens">
                </div>
                <h3>Linguagens</h3>

                <ul>
                    <li><img src="../img/seta.png" class="seta-lista">
                     Java - Iniciante
                    </li>

                    <li><img src="../img/seta.png" class="seta-lista">
                     C - Iniciante
                    </li>

                    <li><img src="../img/seta.png" class="seta-lista">
                     Python - Iniciante
                    </li>

                    <li><img src="../img/seta.png" class="seta-lista">
                     Noção em MySQL
                    </li>
                </ul>
            </div>

            <div class="card-habilidade">
                <div class="icone">
                    <img src="../img/metodologia_icon.png" alt="Metodologias">
                </div>
                <h3>Metodologias</h3>

                <ul>
                    <li><img src="../img/seta.png" class="seta-lista">
                     PMBOK
                    </li>

                    <li><img src="../img/seta.png" class="seta-lista">
                     Engenharia de Software
                    </li>

                    <li><img src="../img/seta.png" class="seta-lista">
                     Kanban
                    </li>

                    <li><img src="../img/seta.png" class="seta-lista">
                     Scrum
                    </li>

                    <li><img src="../img/seta.png" class="seta-lista">
                     Gestão Ágil
                    </li>

                    <li><img src="../img/seta.png" class="seta-lista">
                     Design Thinking
                    </li>
                </ul>
            </div>

            <div class="card-habilidade">
                <div class="icone">
                    <img src="../img/competencia_icon.png" alt="Soft Skills">
                </div>
                <h3>Soft Skills</h3>

                <ul>
                    <li><img src="../img/seta.png" class="seta-lista">
                     Trabalho em equipe
                    </li>

                    <li><img src="../img/seta.png" class="seta-lista">
                     Organização
                    </li>

                    <li><img src="../img/seta.png" class="seta-lista">
                     Comunicação
                    </li>

                    <li><img src="../img/seta.png" class="seta-lista">
                     Aprendizagem rápida
                    </li>

                    <li><img src="../img/seta.png" class="seta-lista">
                     Planejamento
                    </li>
                </ul>
            </div>

            <div class="card-habilidade">
                <div class="icone">
                    <img src="../img/ferramentas_icon.png" alt="Ferramentas">
                </div>
                <h3>Ferramentas</h3>

                <ul>
                    <li><img src="../img/seta.png" class="seta-lista">
                     Figma (Design UI/UX)
                    </li>

                    <li><img src="../img/seta.png" class="seta-lista">
                     Kodular (Low Code)
                    </li>

                    <li><img src="../img/seta.png" class="seta-lista">
                     Visual Studio
                    </li>

                    <li><img src="../img/seta.png" class="seta-lista">
                     Android Studio
                    </li>

                    <li><img src="../img/seta.png" class="seta-lista">
                     Netbeans
                    </li>
                </ul>
            </div>

        </div>

    </section>

    <?php include 'footer.php'; ?>

    <script src="../scripts/revelar.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>