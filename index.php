<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maria Victória | Portfólio</title>
    <link rel="icon" type="image/png" href="img/MV.png">
    
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/sobreMim.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <header class="header-fixo">
        <?php include 'includes/navbar.php'; ?>
    </header>

    <main>
        <section class="home">
            <div class="imagem">
                <img src="img/foto_entrada.png" alt="Maria Victória" class="foto-principal">
            </div>

            <div class="decoracoes-mobile-wrapper">
                <img src="img/coracao.png" alt="coração" class="item-coracao">
                <img src="img/coracao.png" alt="coração" class="item-coracao2">
                <img src="img/estrela1.png" alt="estrela" class="item-estrela">
                <img src="img/estrela2.png" alt="estrela" class="decoracao-lat-esq">
                <img src="img/estrela1.png" alt="estrela" class="decoracao-lat-dir">
            </div>

            <div class="seta-container">
                <a href="#sobre-mim-section">
                    <img src="img/seta2.png" alt="seta" class="seta-pula">
                </a>
            </div>
        </section>

        <section id="sobre-mim-section" class="sobreMim revelar">
            <h1 class="titulo-sobre">Sobre mim</h1>
            <p class="subtitulo">Java | UX/UI Design | Gestão de Projetos</p>
            
            <div class="container-topo-novo">
                <div class="card-biografia">
                    <p>Me chamo Maria Victória, estudante de Análise e Desenvolvimento de Sistemas e apaixonada por tecnologia, design e organização.</p>
                    <p>Possuo conhecimentos em Java, C, Python e PHP, além de experiência em prototipação e design de interfaces utilizando Figma, com foco na experiência do usuário.</p>
                </div>

                <div class="trajetoria-container">
                    <p class="txt-trajetoria">
                        <span>Veja mais sobre minha</span>
                        <span>trajetoria</span>
                    </p>
                    <img src="img/coracao.png" class="coracao-trajetoria">
                </div>

                <div class="botoes">
                    <a href="https://www.linkedin.com/in/maria-hernandes" class="botao linkedin" target="_blank"><img src="img/linkedin_logo.png" style="width: 20px;"> Linkedin</a>
                    <a href="https://github.com/mariavhernandes" class="botao github" target="_blank"><img src="img/github_logo.png" style="width: 20px;"> Github</a>
                </div>
            </div>

            <div class="sobre-container">

            <div class="coluna-esquerda">
                <h2>Educação</h2>

                <ul class="lista">
                    <li><img src="img/seta.png" width="30" height="30" alt="seta">
                    FATEC Americana, Análise e Desenvolvimento de Sistemas <br>
                    Cursando 3° Semestre
                    </li>

                    <li><img src="img/seta.png" width="30" height="30" alt="seta">
                    ETEC Polivalente, Ensino Médio com Habilitação Técnica em Desenvolvimento de Sistemas
                    </li>
                </ul>
            </div>

            <div class="coluna-direita">
                <h2>Experiência profissional</h2>
                    <ul class="lista">
                        <li><img src="img/seta.png" style="width: 30px; height: 30px" alt="seta">
                        Assistente de Gestão de Projetos <br>
                        Cards Tecnologia <br>
                        set/2025 – nov/2025 <br>
                        Atividades: Acompanhamento de cronogramas, monitoramento no progresso de projetos e atuação em reuniões de kick-off e alinhamento com clientes.
                        </li>
                    </ul>
            </div>
        </div>

        <div class="cursos-idiomas">
            <div class="bloco-cursos">
                <h2>Cursos</h2>
                    <ul class="lista">
                        <li>
                            <img src="img/seta.png" width="30" height="30">
                            Venturus4tech (LowCode e No Code) – Venturus [2023]
                        </li>

                        <li>
                            <img src="img/seta.png" width="30" height="30">
                            Hackathon Cyber NexGen – Pecege [2024]
                        </li>

                        <li>
                            <img src="img/seta.png" width="30" height="30">
                            Fundamentos da Inteligência Artificial – IBM SkillsBuild [2025]
                        </li>

                        <li>
                            <img src="img/seta.png" width="30" height="30">
                            Gestão de Projetos na Prática – Cards Tecnologia [2025]
                        </li>
                    </ul>

                <p class="obs">
                    *Para visualizar todos os cursos e certificados, acesse meu LinkedIn
                </p>
            </div>

            <div class="posicao-estrela-idioma">
                <img src="img/estrela1.png" style="width: 60px; height: 60px" class="vector estrela-esquerda">

                <div class="card-idiomas">
                    <h2>Idiomas</h2>
                    <p><img src="img/seta.png" style="width: 30px; height: 30px"> Inglês B2</p>
                    <span class="cert-toeic">Certificação TOEIC</span>
                </div>                
                    <img src="img/estrela2.png" style="width: 60px; height: 50px" class="vector estrela-direita">
            </div>
        </div>
            </section>
    </main>

    <?php include 'includes/footer.php'; ?>

    <script src="scripts/seta.js"></script>
    <script src="scripts/revelar.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>