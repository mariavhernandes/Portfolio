<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projetos | Agenda Digital</title>

    <link rel="icon" type="image/png" href="../img/MV.png">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/projetosfigma.css?v=1.1">

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

                <h1>Agenda Digital</h1>

                <p>
                Protótipo de agenda voltada para a organização de rotina diária, reuniões e lembretes. Ele cumpre as heurísticas de visibilidade de status, rótulos simples e reconhecimento em vez de memorização
                </p>

                <br><br>

                <h1>Funcionalidades</h1>

                <ul>
                    <li>Criar um compromisso</li>
                    <li>Alterar horários</li>
                    <li>Excluir compromissos</li>
                </ul>

                <br><br>

                <h1>Tecnologias Utilizadas</h1>

                <ul>
                    <li>Figma</li>
                </ul>

                <br>

                <a href="https://www.figma.com/design/lp10aImnFOdwnyeabQMQWb/Minha-Agenda?node-id=0-1&t=cgogDIRpQxpBHMSF-1" class="botao figma" target="_blank" rel="noopener">
                    <img src="../img/figma.png" style="width: 20px; height: 20px" alt="figma"> Ver Protótipo
                </a>
            </div>


            <div class="imagens-projeto">
                <img src="../img/agenda1.png">
                <img src="../img/agenda2.png">
                <img src="../img/agenda3.png">
            </div>
        </div>

    </section>

    <?php include '../includes/footer.php'; ?>

</body>
</html>