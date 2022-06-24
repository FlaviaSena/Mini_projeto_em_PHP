<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
       <!--LINK ASSOCIANDO O CÓDIGO À BIBLIOTECA BOOTSTRAP-->
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

   <title>Canal do Aluno</title>
   <style type="text/css">
      body{
    background: rgb(34,193,195);
    background: linear-gradient(0deg, rgba(34,193,195,1) 0%, rgba(253,45,196,0.3225665266106442) 100%);
 }
 form{
  
    width: 40px;
    min-width: 350px;
    background: #FF69B4;
    box-shadow: 0 15px 30px white;
    margin: 100px auto;
    border-radius: 5px;
    padding-bottom: 5px;
 }
 input, textarea
 {
 min-width: 120px;
 display: block;
 margin: 0 auto;
 border: 1px solid blueviolet ;
 margin-top: 20px;
 height: 40px;
 padding-left: 10px;
 }
 textarea{
    height: 100px;
    padding-top: 10px;
 }
 h1{
    text-align: center;
 }
 button{
    display: block;
    margin: 20px auto;
    height: 40px;
    min-width: 320px;
    border: none;
    background-color: royalblue;
    color: black;
    cursor: pointer;
  
 }
 button:hover{
    opacity: 0.4;
 }
 button:active{
    opacity: 0.6;
 }

   </style>
</head>
<body>
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


    </div>
</div>
</nav>
<br>
<br>
<br>
   <form style="background-color: #c8d5f8;">
       <h1>Canal do Aluno</h1>
       <input type="text" name="neme" placeholder="Login" required>
       <input type="text" name="E-mail" placeholder="Senha" required>
       <button type="submit">Enviar</button>
   </form>
       <!--RODAPÉ DO SITE-->
       <br>
       <br>
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
