<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Logos - A sua escola de profissões!</title>

    <!--PACOTE DE FAVICON - ÍCONE DO SITE NAS ABAS DOS NAVEGADORES-->
    <link rel="apple-touch-icon" sizes="180x180" href="imagens/logosimples-logos-informatica.png">
    <link rel="icon" type="image/png" sizes="32x32" href="imagens/logosimples-logos-informatica.png">
    <link rel="icon" type="image/png" sizes="16x16" href="imagens/logosimples-logos-informatica.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="imagens/logosimples-logos-informatica.png" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!--LINK ASSOCIANDO O CÓDIGO À BIBLIOTECA BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>

    <style>
        body {
            margin: auto;
            width: 80%;
            position: relative;
        }
    </style>

    <!--MENU DE NAVEGAÇÃO DO SITE-->
    <nav class="navbar navbar-expand-lg fixed-top fw-bold align-items-center" style="background-color: #c8d5f8;">

        <!--ÍCONE DA ESCOLA COM LINK DE REDIRECIONAMENTO PARA O INÍCIO-->
        <div class="container-fluid align-items-center">

            <a class="navbar-brand" href="#">
                <img src="imagens/logos-informatica-logo.png" alt="" width="140" height="50">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!--OPÇÕES DO MENU-->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="home.php">Início</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Institucional</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li>
                                <a class="dropdown-item" href="#">História</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">Conquistas</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">Projetos</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Cursos</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Eventos</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Dúvidas Frequentes</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="Fale.php">Fale Conosco</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Biblioteca</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="matricula.php">Matrícula on-line</a>
                    </li>

                </ul>


                <button class="btn btn-primary " type="submit"><a class="text-white text-decoration-none" href="login.php">Canal do aluno</a></button>
            </div>
        </div>
    </nav>

    <br>
    <br>
    <br>

    <div>
        <h1 class="card-title fs-1 fw-bold text-center mb-3">O sucesso do seu fururo é a nossa missão!</h1>
    </div>

    <hr>

    <!--CARROSSEL DE IMAGENS DO TOPO-->
    <div id="carouselExampleInterval" class="carousel slide w-100 p-12 col-md-6" data-bs-ride="carousel">
        <div class="carousel-inner">

            <div class="carousel-item active" data-bs-interval="2000">
                <img src="imagens/laboratorio1.jpg" class="d-block w-100" alt="...">
            </div>

            <div class="carousel-item" data-bs-interval="2000">
                <img src="imagens/laboratorio2.jpg" class="d-block w-100" alt="...">
            </div>

            <div class="carousel-item" data-bs-interval="2000">
                <img src="imagens/manutencao1.jpg" class="d-block w-100" alt="...">
            </div>

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <br>
    <hr>
    <br>

    <!--1º GRUPO DE CARDS DE TEXTUAIS-->

    <div>
        <h1 class="card-title fs-1 fw-bold text-center mb-3">Institucional</h1>
    </div>

    <div class="card-group w-100 p-3 text-center" style="position: relative; margin: auto;">

        <!--CARD-->
        <div class="card text-center w-100 p-1 card border-primary mb-3">
            <div class="card-header ">
                <svg xmlns="http://www.w3.org/2000/svg " width="50 " height="50 " fill="currentColor " class="bi bi-book " viewBox="0 0 16 16 ">
                    <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8
    1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5
    0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z " />
                </svg>
                <h5 class="card-title">História</h5>
            </div>
            <div class="card-body ">
                <p class="card-title ">Conheça um pouco da nossa história, desde a fundação até os dias atuais.</p>
            </div>
        </div>

        <!--CARD-->
        <div class="card text-center w-100 p-1 card border-primary mb-3 ">
            <div class="card-header ">
                <svg xmlns="http://www.w3.org/2000/svg " width="50 " height="50 " fill="currentColor " class="bi bi-building " viewBox="0 0 16 16 ">
                    <path fill-rule="evenodd " d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022zM6 8.694
    1 10.36V15h5V8.694zM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5V15z " />
                    <path d="M2 11h1v1H2v-1zm2 0h1v1H4v-1zm-2 2h1v1H2v-1zm2 0h1v1H4v-1zm4-4h1v1H8V9zm2 0h1v1h-1V9zm-2 2h1v1H8v-1zm2 0h1v1h-1v-1zm2-2h1v1h-1V9zm0 2h1v1h-1v-1zM8 7h1v1H8V7zm2 0h1v1h-1V7zm2 0h1v1h-1V7zM8 5h1v1H8V5zm2 0h1v1h-1V5zm2 0h1v1h-1V5zm0-2h1v1h-1V3z "
                    />
                </svg>
                <h5 class="card-title ">Conquistas</h5>
            </div>
            <div class="card-body ">

                <p class="card-text ">Nossos prêmios conquistados ao longo de nossa trajetória.</p>
            </div>
        </div>

        <!--CARD-->
        <div class="card text-center w-100 p-1 card border-primary mb-3 ">
            <div class="card-header ">
                <svg xmlns="http://www.w3.org/2000/svg " width="50 " height="50 " fill="currentColor " class="bi bi-lightbulb " viewBox="0 0 16 16 ">
                    <path d="M2 6a6 6 0 1 1 10.174 4.31c-.203.196-.359.4-.453.619l-.762 1.769A.5.5 0 0 1 10.5 13a.5.5 0 0 1 0 1 .5.5 0 0 1 0 1l-.224.447a1 1 0 0 1-.894.553H6.618a1 1 0 0 1-.894-.553L5.5 15a.5.5 0 0 1 0-1 .5.5 0 0 1 0-1 .5.5 0 0 1-.46-.302l-.761-1.77a1.964
    1.964 0 0 0-.453-.618A5.984 5.984 0 0 1 2 6zm6-5a5 5 0 0 0-3.479 8.592c.263.254.514.564.676.941L5.83 12h4.342l.632-1.467c.162-.377.413-.687.676-.941A5 5 0 0 0 8 1z "
                    />
                </svg>
                <h5 class="card-title ">Projetos</h5>
            </div>
            <div class="card-body ">

                <p class="card-text ">Conheça nossos projetos para o futuro.</p>
            </div>
        </div>
    </div>


    <hr>

    <!--CARD INTERMEDIÁRIO COM IMAGEM - SEPARAÇÃO ENTRE DUAS SEÇÕES DE CARDS TEXTUAIS-->
    <div class="card bg-primary text-dark w-100 p-1">
        <img src="imagens/aula1.jpg" class="card-img" alt="...">
    </div>


    <hr>


    <!--2º GRUPO DE CARDS TEXTUAIS-->

    <div>
        <h1 class="card-title fs-1 fw-bold text-center mb-3">Por quê estudar na Logos?</h1>
    </div>

    <div class="card-group w-100 p-3" style="position: relative; margin: auto;">

        <!--CARD-->
        <div class="card text-center w-100 p-1 card border-primary mb-3">
            <div class="card-header">
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-book" viewBox="0 0 16 16">
                    <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"
                    />
                </svg>
                <h5 class="card-title">Material didático de qualidade</h5>
            </div>
            <div class="card-body">

                <p class="card-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ac placerat lorem, a pulvinar tortor. Fusce luctus scelerisque ornare. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Fusce accumsan
                    suscipit nisi, vitae pellentesque ante efficitur eget.</p>
            </div>
        </div>

        <!--CARD-->
        <div class="card text-center w-100 p-1 card border-primary mb-3">
            <div class="card-header">
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-building" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022zM6 8.694 1 10.36V15h5V8.694zM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5V15z"
                    />
                    <path d="M2 11h1v1H2v-1zm2 0h1v1H4v-1zm-2 2h1v1H2v-1zm2 0h1v1H4v-1zm4-4h1v1H8V9zm2 0h1v1h-1V9zm-2 2h1v1H8v-1zm2 0h1v1h-1v-1zm2-2h1v1h-1V9zm0 2h1v1h-1v-1zM8 7h1v1H8V7zm2 0h1v1h-1V7zm2 0h1v1h-1V7zM8 5h1v1H8V5zm2 0h1v1h-1V5zm2 0h1v1h-1V5zm0-2h1v1h-1V3z"
                    />
                </svg>
                <h5 class="card-title">Instalações de primeira</h5>
            </div>
            <div class="card-body">

                <p class="card-text">Integer lacinia lectus ut neque scelerisque, eget tristique est vestibulum. Curabitur urna lectus, gravida a lobortis in, ullamcorper at turpis. Vestibulum nec nunc id tellus vestibulum imperdiet a ac orci.</p>
            </div>
        </div>

        <!--CARD-->
        <div class="card text-center w-100 p-1 card border-primary mb-3">
            <div class="card-header">
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-mortarboard-fill" viewBox="0 0 16 16">
                    <path d="M8.211 2.047a.5.5 0 0 0-.422 0l-7.5 3.5a.5.5 0 0 0 .025.917l7.5 3a.5.5 0 0 0 .372 0L14 7.14V13a1 1 0 0 0-1 1v2h3v-2a1 1 0 0 0-1-1V6.739l.686-.275a.5.5 0 0 0 .025-.917l-7.5-3.5Z"
                    />
                    <path d="M4.176 9.032a.5.5 0 0 0-.656.327l-.5 1.7a.5.5 0 0 0 .294.605l4.5 1.8a.5.5 0 0 0 .372 0l4.5-1.8a.5.5 0 0 0 .294-.605l-.5-1.7a.5.5 0 0 0-.656-.327L8 10.466 4.176 9.032Z"
                    />
                </svg>
                <h5 class="card-title">Corpo docente renomado</h5>
            </div>
            <div class="card-body">

                <p class="card-text">Phasellus ullamcorper pulvinar sapien ac laoreet. Donec faucibus eros non ipsum pharetra, sit amet hendrerit erat accumsan. Sed suscipit risus erat. Integer eget enim enim.</p>
            </div>
        </div>
    </div>


    <hr>

    <!--2º GRUPO DE CARDS IMAGENS - CATÁLOGO DE CURSOS-->
    <!--Ideia: Alterar os cards dessa seção para cards com imagens e texto nas imagens, a fim de permitir que os cursos sejam exiibidos de forma intuitiva-->
    <div>
        <h1 class="card-title fs-1 fw-bold text-center mb-3">Conheça nosso catálogo de cursos</h1>
    </div>

    <!--PRIMEIRA FILEIRA DE OPÇÕES DE CURSOS-->
    <div class="card-group w-100 p-3" style="position: relative; margin: auto;">

        <!--CARD-->
        <div class="card" style="width: 18rem;">
            <img src="imagens/telecomunicacoes.png" class="card-img" alt="...">
            <div class="card-body">
                <h5 class="card-title">Técnico em Telecomunicações</h5>
                <a href="#" class="btn btn-outline-success">Eu quero</a>
            </div>
        </div>

        <!--CARD-->
        <div class="card" style="width: 18rem;">
            <img src="imagens/redes-computadores.jpg" class="card-img" alt="...">
            <div class="card-body">
                <h5 class="card-title">Analista de Redes de Computadores</h5>
                <a href="#" class="btn btn-outline-success">Eu quero</a>
            </div>
        </div>

        <!--CARD-->
        <div class="card" style="width: 18rem;">
            <img src="imagens/informatica-basica.png" class="card-img" alt="...">
            <div class="card-body">
                <h5 class="card-title">Técnico em Informática Profissionalizante</h5>
                <a href="#" class="btn btn-outline-success">Eu quero</a>
            </div>
        </div>

        <!--CARD-->
        <div class="card" style="width: 18rem;">
            <img src="imagens/manutencaopc.png" class="card-img" alt="...">
            <div class="card-body">
                <h5 class="card-title">Técnico de Montagem e Manutenção de Computadores</h5>
                <a href="#" class="btn btn-outline-success">Eu quero</a>
            </div>
        </div>

        <!--CARD-->
        <div class="card" style="width: 18rem;">
            <img src="imagens/seguranca-trabalho.webp" class="card-img" alt="...">
            <div class="card-body">
                <h5 class="card-title">Técnico em Segurança do Trabalho</h5>
                <a href="#" class="btn btn-outline-success">Eu quero</a>
            </div>
        </div>
    </div>

    <!--SEGUNDA FILEIRA DE OPÇÕES DE CURSOS-->
    <div class="card-group w-100 p-3" style="position: relative; margin: auto;">
        <!--CARD-->
        <div class="card" style="width: 18rem;">
            <img src="imagens/administracao.jpg" class="card-img" alt="...">
            <div class="card-body">
                <h5 class="card-title">Técnico em Administração</h5>
                <a href="#" class="btn btn-outline-success">Eu quero</a>
            </div>
        </div>

        <!--CARD-->
        <div class="card" style="width: 18rem;">
            <img src="imagens/tecnico-eletronica.webp" class="card-img" alt="...">
            <div class="card-body">
                <h5 class="card-title">Técnico em Eletrônica</h5>
                <a href="#" class="btn btn-outline-success">Eu quero</a>
            </div>
        </div>

        <!--CARD-->
        <div class="card" style="width: 18rem;">
            <img src="imagens/tecnico-quimica.png" class="card-img" alt="...">
            <div class="card-body">
                <h5 class="card-title">Técnico em Química</h5>
                <a href="#" class="btn btn-outline-success">Eu quero</a>
            </div>
        </div>

        <!--CARD-->
        <div class="card" style="width: 18rem;">
            <img src="imagens/automacao-industrial.webp" class="card-img" alt="...">
            <div class="card-body">
                <h5 class="card-title">Técnico em Automação Industrial</h5>
                <a href="#" class="btn btn-outline-success">Eu quero</a>
            </div>
        </div>


        <!--CARD-->
        <div class="card w-100 p-3" style="width: 18rem;">
            <img src="imagens/desenvolvedor-web.webp" class="card-img" alt="...">
            <div class="card-body">
                <h5 class="card-title">Técnico em Desenvolvimento Web</h5>
                <a href="#" class="btn btn-outline-success">Eu quero</a>
            </div>
        </div>
    </div>

    <hr>

    <!--SEÇÃO DE ACORDEÃO - EVENTOS DA INSTITUIÇÃO-->
    <!--TÍTULO-->
    <div>
        <h1 class="card-title fs-1 fw-bold text-center mb-3">Nossos Eventos</h1>
    </div>

    <!--OPÇÃO-->
    <div class="accordion accordion-flush w-100 p-3" id="accordionFlushExample" style="position: relative; margin: auto;">
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-heading1">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse1" aria-expanded="false" aria-controls="flush-collapseOne">
                <b>Semana da Comunicação - 20/06/2022 à 25/06/2022</b>
                </button>
            </h2>
            <div id="flush-collapse1" class="accordion-collapse collapse" aria-labelledby="flush-heading1" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    <div class="d-flex position-relative">
                        <img src="imagens/telecomunicacoes.jpeg" class="flex-shrink-0 me-3" style="width: 300px; margin: auto;" alt="...">
                        <div>
                            <h5 class="mt-0">Semana da Comunicação - 27/06/2022 à 02/06/2022</h5>
                            <p> Aliquam vitae enim et diam consectetur varius. Nulla lacus odio, iaculis a metus et, maximus vehicula arcu. Cras malesuada vulputate egestas. Donec bibendum lorem condimentum pulvinar egestas. Aenean dapibus, dolor eu ultrices
                                sagittis, lacus lorem malesuada leo, ut varius nulla est quis libero. Donec ultricies convallis pulvinar. Aliquam id felis convallis, semper libero in, convallis odio. Integer a iaculis erat. Integer mattis fermentum lorem
                                ut malesuada. Proin lobortis tempus semper. Morbi imperdiet turpis ut arcu euismod scelerisque.</p>
                            <a href="#" class="stretched-link">Saiba mais</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--OPÇÃO-->

        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-heading2">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse2" aria-expanded="false" aria-controls="flush-collapseTwo">
                    <b>Semana da Tecnologia - 27/06/2022 à 02/06/2022</b>
                </button>
            </h2>
            <div id="flush-collapse2" class="accordion-collapse collapse" aria-labelledby="flush-heading2" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    <div class="d-flex position-relative">
                        <img src="imagens/manutencao1.png" class="flex-shrink-0 me-3" style="width: 300px; margin: auto;" alt="...">
                        <div>
                            <h5 class="mt-0">Semana da Tecnologia - 27/06/2022 à 02/06/2022</h5>
                            <p> Aliquam vitae enim et diam consectetur varius. Nulla lacus odio, iaculis a metus et, maximus vehicula arcu. Cras malesuada vulputate egestas. Donec bibendum lorem condimentum pulvinar egestas. Aenean dapibus, dolor eu ultrices
                                sagittis, lacus lorem malesuada leo, ut varius nulla est quis libero. Donec ultricies convallis pulvinar. Aliquam id felis convallis, semper libero in, convallis odio. Integer a iaculis erat. Integer mattis fermentum lorem
                                ut malesuada. Proin lobortis tempus semper. Morbi imperdiet turpis ut arcu euismod scelerisque.</p>
                            <a href="#" class="stretched-link">Saiba mais</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--OPÇÃO-->
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-heading3">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse3" aria-expanded="false" aria-controls="flush-collapseThree">
                    <b>Semana da Automação Industrial - 04/07/2022 à 09/07/2022</b>
                </button>
            </h2>
            <div id="flush-collapse3" class="accordion-collapse collapse" aria-labelledby="flush-heading3" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    <div class="d-flex position-relative">
                        <img src="imagens/automacao-industrial.webp" class="flex-shrink-0 me-3 " style="width: 300px; margin: auto;" alt="...">
                        <div>
                            <h5 class="mt-0">Semana da Automação Industrial - 04/07/2022 à 09/07/2022</h5>
                            <p> Nullam ac nibh magna. Praesent elementum diam eu elit pulvinar, auctor consequat ante vestibulum. Maecenas id purus ante. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Mauris semper
                                nibh ac fermentum egestas. Vivamus quam diam, scelerisque id sagittis sed, molestie vel nibh. Aliquam feugiat suscipit finibus. Praesent nec quam eu dolor luctus pharetra eu eu magna. Integer eleifend est sed velit euismod,
                                id mollis libero porta. Etiam ut massa bibendum, pharetra lorem ultricies, interdum orci. Integer eu justo in justo convallis viverra. Donec quis convallis massa. Donec lacus ligula, sagittis sit amet lacus a, condimentum
                                iaculis arcu. Morbi bibendum nisl tincidunt, laoreet risus at, commodo ipsum. Integer efficitur ante metus.</p>
                            <a href="#" class="stretched-link">Saiba mais</a>
                        </div>
                    </div>
                </div>




            </div>
        </div>

    </div>

    <hr>

    <!--SEÇÃO DE ACORDEÃO - DÚVIDAS FREQUENTES-->
    <!--TÍTULO-->
    <div>
        <h1 class="card-title fs-1 fw-bold text-center mb-3">O que você precisa saber para ser nosso aluno</h1>
    </div>

    <!--OPÇÃO-->
    <div class="accordion accordion-flush w-100 p-3" id="accordionFlushExample" style="position: relative; margin: auto;">
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                <b>Qual é o horário dos cursos oferecidos?</b>
                </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    Ut luctus, enim eget suscipit placerat, eros est mollis turpis, vitae eleifend dui massa nec quam. Sed a metus arcu. Quisque sed metus magna. Etiam vitae purus nec lacus facilisis scelerisque. Quisque sodales hendrerit velit, non blandit justo suscipit
                    pretium. Vivamus placerat nec mi quis varius. Sed id odio neque. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Aliquam commodo vitae nibh ut maximus. Phasellus rutrum ante non leo faucibus
                    euismod. Etiam molestie nibh velit, in volutpat massa bibendum nec.
                </div>
            </div>
        </div>

        <!--OPÇÃO-->
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                    <b>Qual é o tempo de duração dos cursos ofertados?</b>
                </button>
            </h2>
            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    Aliquam vitae enim et diam consectetur varius. Nulla lacus odio, iaculis a metus et, maximus vehicula arcu. Cras malesuada vulputate egestas. Donec bibendum lorem condimentum pulvinar egestas. Aenean dapibus, dolor eu ultrices sagittis, lacus lorem malesuada
                    leo, ut varius nulla est quis libero. Donec ultricies convallis pulvinar. Aliquam id felis convallis, semper libero in, convallis odio. Integer a iaculis erat. Integer mattis fermentum lorem ut malesuada. Proin lobortis tempus semper.
                    Morbi imperdiet turpis ut arcu euismod scelerisque.
                </div>
            </div>
        </div>

        <!--OPÇÃO-->
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                    <b>Quais os documentos necessários para realizar minha matrícula?</b>
                </button>
            </h2>
            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    Nullam ac nibh magna. Praesent elementum diam eu elit pulvinar, auctor consequat ante vestibulum. Maecenas id purus ante. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Mauris semper nibh ac fermentum egestas.
                    Vivamus quam diam, scelerisque id sagittis sed, molestie vel nibh. Aliquam feugiat suscipit finibus. Praesent nec quam eu dolor luctus pharetra eu eu magna. Integer eleifend est sed velit euismod, id mollis libero porta. Etiam ut massa
                    bibendum, pharetra lorem ultricies, interdum orci. Integer eu justo in justo convallis viverra. Donec quis convallis massa. Donec lacus ligula, sagittis sit amet lacus a, condimentum iaculis arcu. Morbi bibendum nisl tincidunt, laoreet
                    risus at, commodo ipsum. Integer efficitur ante metus.
                </div>
            </div>
        </div>

        <!--OPÇÃO-->
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingFour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseThree">
                            <b>A LOGOS - Escola de profissões é reconhecida pelo Ministério da Educação (MEC)?</b>
                        </button>
            </h2>
            <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    Nullam ac nibh magna. Praesent elementum diam eu elit pulvinar, auctor consequat ante vestibulum. Maecenas id purus ante. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Mauris semper nibh ac fermentum egestas.
                    Vivamus quam diam, scelerisque id sagittis sed, molestie vel nibh. Aliquam feugiat suscipit finibus. Praesent nec quam eu dolor luctus pharetra eu eu magna. Integer eleifend est sed velit euismod, id mollis libero porta. Etiam ut massa
                    bibendum, pharetra lorem ultricies, interdum orci. Integer eu justo in justo convallis viverra. Donec quis convallis massa. Donec lacus ligula, sagittis sit amet lacus a, condimentum iaculis arcu. Morbi bibendum nisl tincidunt, laoreet
                    risus at, commodo ipsum. Integer efficitur ante metus.
                </div>
            </div>
        </div>

        <!--OPÇÃO-->
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingFive">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseThree">
                    <b>A LOGOS indica os alunos à estágios?</b>
                </button>
            </h2>
            <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    Nullam ac nibh magna. Praesent elementum diam eu elit pulvinar, auctor consequat ante vestibulum. Maecenas id purus ante. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Mauris semper nibh ac fermentum egestas.
                    Vivamus quam diam, scelerisque id sagittis sed, molestie vel nibh. Aliquam feugiat suscipit finibus. Praesent nec quam eu dolor luctus pharetra eu eu magna. Integer eleifend est sed velit euismod, id mollis libero porta. Etiam ut massa
                    bibendum, pharetra lorem ultricies, interdum orci. Integer eu justo in justo convallis viverra. Donec quis convallis massa. Donec lacus ligula, sagittis sit amet lacus a, condimentum iaculis arcu. Morbi bibendum nisl tincidunt, laoreet
                    risus at, commodo ipsum. Integer efficitur ante metus.
                </div>
            </div>
        </div>

        <!--OPÇÃO-->
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingSix">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseThree">
                            <b>A LOGOS disponibiliza carteirinha aos alunos?</b>
                        </button>
            </h2>
            <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    Nullam ac nibh magna. Praesent elementum diam eu elit pulvinar, auctor consequat ante vestibulum. Maecenas id purus ante. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Mauris semper nibh ac fermentum egestas.
                    Vivamus quam diam, scelerisque id sagittis sed, molestie vel nibh. Aliquam feugiat suscipit finibus. Praesent nec quam eu dolor luctus pharetra eu eu magna. Integer eleifend est sed velit euismod, id mollis libero porta. Etiam ut massa
                    bibendum, pharetra lorem ultricies, interdum orci. Integer eu justo in justo convallis viverra. Donec quis convallis massa. Donec lacus ligula, sagittis sit amet lacus a, condimentum iaculis arcu. Morbi bibendum nisl tincidunt, laoreet
                    risus at, commodo ipsum. Integer efficitur ante metus.
                </div>
            </div>
        </div>

        <!--OPÇÃO-->
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingSeven">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseThree">
                    <b>Política de descontos da LOGOS</b>
                </button>
            </h2>
            <div id="flush-collapseSeven" class="accordion-collapse collapse" aria-labelledby="flush-headingSeven" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    Nullam ac nibh magna. Praesent elementum diam eu elit pulvinar, auctor consequat ante vestibulum. Maecenas id purus ante. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Mauris semper nibh ac fermentum egestas.
                    Vivamus quam diam, scelerisque id sagittis sed, molestie vel nibh. Aliquam feugiat suscipit finibus. Praesent nec quam eu dolor luctus pharetra eu eu magna. Integer eleifend est sed velit euismod, id mollis libero porta. Etiam ut massa
                    bibendum, pharetra lorem ultricies, interdum orci. Integer eu justo in justo convallis viverra. Donec quis convallis massa. Donec lacus ligula, sagittis sit amet lacus a, condimentum iaculis arcu. Morbi bibendum nisl tincidunt, laoreet
                    risus at, commodo ipsum. Integer efficitur ante metus.
                </div>
            </div>
        </div>

        <!--OPÇÃO-->
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingEight">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseEight" aria-expanded="false" aria-controls="flush-collapseThree">
                            <b>Modalidades de pagamento</b>
                        </button>
            </h2>
            <div id="flush-collapseEight" class="accordion-collapse collapse" aria-labelledby="flush-headingEight" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    Nullam ac nibh magna. Praesent elementum diam eu elit pulvinar, auctor consequat ante vestibulum. Maecenas id purus ante. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Mauris semper nibh ac fermentum egestas.
                    Vivamus quam diam, scelerisque id sagittis sed, molestie vel nibh. Aliquam feugiat suscipit finibus. Praesent nec quam eu dolor luctus pharetra eu eu magna. Integer eleifend est sed velit euismod, id mollis libero porta. Etiam ut massa
                    bibendum, pharetra lorem ultricies, interdum orci. Integer eu justo in justo convallis viverra. Donec quis convallis massa. Donec lacus ligula, sagittis sit amet lacus a, condimentum iaculis arcu. Morbi bibendum nisl tincidunt, laoreet
                    risus at, commodo ipsum. Integer efficitur ante metus.
                </div>
            </div>
        </div>
    </div>

    <hr>

    <!--SEÇÃO FALE CONOSCO-->
    <!--TÍTULO-->
    <div>
        <h1 class="card-title fs-1 fw-bold text-center mb-3">Ainda tem dúvidas sobre como ingressar na Logos?</h1>
    </div>

    <h5 class="text-center" style="position: relative; margin: auto;">Clique no botão abaixo e registre a sua dúvida para que possamos sanar todas as dúvidas pendentes!</h5>
    <br>
    <div class="d-grid gap-2 col-6 mx-auto">
        <button class="btn btn-outline-primary btn-lg" type="button">Quero entrar em contato!</button>
    </div>



    <hr>

    <!--SEÇÃO MATRÍCULA ON-LINE-->
    <!--TÍTULO-->
    <div>
        <h1 class="card-title fs-1 fw-bold text-center mb-3">Junte-se à nós! Seja um aluno Logos!</h1>
    </div>

    <h5 class="text-center">Clique no botão abaixo e garanta um futuro profissional mais qualificado!</h5>
    <br>
    <div class="d-grid gap-2 col-6 mx-auto">
        <button class="btn btn-success btn-lg" type="button">Quero ser aluno!</button>
    </div>




    <!--RODAPÉ DO SITE-->
    <hr>

    <footer>

        <table class="table text-center table-light table-striped text-dark w-100">
            <tr>
                <td>
                    <img src="imagens/logos-informatica-logo.png" alt="" width="140" height="50">
                </td>
            </tr>
            <tr>
                <td>
                    <p>Rua Dias da Cruz, 000, Méier, Rio de Janeiro - RJ CEP 00000-000</p>
                </td>
            </tr>
        </table>

        <table class="table text-center table-dark table-striped text-dark w-100">
            <tbody>
                <tr>
                    <td>
                        <a class="text-white" href="#">Início</a>
                    </td>
                    <td>
                        <a class="text-white" href="#">Conquistas</a>
                    </td>

                    <td>
                        <a class="text-white" href="#">Eventos</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a class="text-white" href="#">Institucional</a>
                    </td>
                    <td>
                        <a class="text-white" href="#">Projetos</a>
                    </td>
                    <td>
                        <a class="text-white" href="#">Dúvidas</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a class="text-white" href="#">História</a>
                    </td>

                    <td>
                        <a class="text-white" href="#">Cursos</a>
                    </td>
                    <td>
                        <a class="text-white" href="#">Fale Conosco</a>
                    </td>
                </tr>
            </tbody>
        </table>

        <table class="table text-center table-primary table-striped text-dark w-100">
            <tr>
                <td>
                    <p class="fw-bold text-center mb-3">Desenvolvido no módulo de MS Project do Curso Técnico em Informática do SENAC Bonsucesso - 2022</p>
                </td>
            </tr>
        </table>
    </footer>

    <!--JAVASCRIPT DO BOOTSTRAP-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js " integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2 " crossorigin="anonymous "></script>
</body>

</html>