<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projetos | ADM Soluções</title>

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

                <h1>ADM Soluções - Gestão de Agendamentos</h1>

                <p>
                O ADM Soluções foi desenvolvido para automatizar e gerenciar o ciclo completo de agendamentos realizados por um prestador de serviços. Idealizado para substituir a gestão manual e a comunicação ineficiente, fornecendo uma interface intuitiva para que os clientes consultem disponibilidade e realizem reservas de forma autônoma
                </p>

                <br><br>

                <h1>Funcionalidades</h1>

                <ul>
                    <li>Agendamento online em tempo real</li>
                    <li>Controle total para o administrador cadastrar, editar ou cancelar serviços</li>
                    <li>Geração de relatórios</li>
                </ul>

                <br><br>

                <h1>Tecnologias Utilizadas</h1>

                <ul>
                    <li>HTML5, CSS3</li>
                    <li>PHP</li>
                    <li>MySQL</li>
                    <li>Arquitetura: Padrão em camadas</li>
                </ul>

                <br>

                <a href="https://github.com/mariavhernandes/AdmSolucoes" class="botao github" target="_blank" rel="noopener">
                    <img src="../img/github_logo.png" style="width: 20px; height: 20px" alt="github"> Ver Código
                </a>
            </div>

            <div class="imagens-projeto">
                <img src="../img/adm1.png">
                <img src="../img/adm2.png">
                <img src="../img/adm3.png">
            </div>
        </div>

    </section>

    <?php include '../includes/footer.php'; ?>

</body>
</html>