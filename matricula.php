<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Matricula On-line</title>
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


                <button class="btn btn-primary " type="submit"><a class="text-white text-decoration-none" href="http://localhost/Projeto2/login.php">Canal do aluno</a></button>
            </div>
        </div>
    </nav>
    <br>
    <br>
    <br>
    
    
    <h1>Matricula</h1>
    <form>
        <h3>Insira seus dados.</h3>
        <div class="form-group">
    <label for="exampleInputEmail1">Nome completo</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu nome">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Endereço de email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu email">
  </div>
  <div class="form-group ">
  <label for="exampleInputEmail1">Curso</label>
  <select class="form-select" aria-label="Default select example">
  <option class="text-muted" selected >Selecione o Curso</option>
  <option class="text-dark" value="1">Técnico em Telecomunicações</option>
  <option class="text-dark" value="2">Analista de Redes de Computadores</option>  
  <option class="text-dark" value="3">Técnico em Informática Profissionalizante</option>  
  <option class="text-dark" value="4">Técnico de Montagem e Manutenção de Computadores</option>  
  <option class="text-dark" value="5">Técnico em Segurança do Trabalho</option>  
  <option class="text-dark" value="6">Técnico em Administração</option>  
  <option class="text-dark" value="7">Técnico em Eletrônica</option>  
  <option class="text-dark" value="8">Técnico em Química</option>  
  <option class="text-dark" value="9">Técnico em Automação Industrial</option>  
  <option class="text-dark" value="10">Técnico em Desenvolvimento Web</option>  
    </select>
</div>
  <div class="form-group">
  <label for="exampleInputEmail1">Unidade</label>
  <select class="form-select" aria-label="Default select example">
  <option class="text-muted" selected >Selecione a Unidade</option>
  <option class="text-dark" value="1">Unidade Bonsucesso</option>
  <option class="text-dark" value="2">Unidade Tijuca</option>
</select>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Celular</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Exp: (21) 99999-9999">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Podemos entrar em contato pelo whatsapp?</label>

  </div>
 
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>
 <!--RODAPÉ DO SITE-->
 <br> <br><br>
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
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>