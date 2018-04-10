<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        Quiz ENEM 2018
    </title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/quiz.css">
    <script type="text/javascript" src="js/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/jquery.validate.js"></script>
</head>

<body>

    <header class="navbar navbar-expand-lg navbar-light bg-light">

        <div class="navbar-brand w-100 order-1 order-md-0 dual-collapse2">
            <h1 class="navbar-brand">
                <a class="nav-link" href="#">ENEM Quiz 2018</a>
            </h1>
        </div>

        <nav class="collapse navbar-collapse mr-sm-2" >
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a id="author" class="nav-link" href="#">Autor</a>
              </li>
            </ul>
        </nav>

    </header>

    <div class="jumbotron" id="jumbotron">
        <h1>Preparado para o ENEM 2018?</h1>
        <p>Aproveite este quiz para exercitar o que você já aprendeu até agora, boa sorte!</p>
    </div>

    <div class="container" id="wrap_content">
        <form id="quiz" action="correction.php" method="post">
            <ol>
                <?php
                include "questions_mng.php";
                get_questions();
                ?>
            </ol>
            <input type="submit" value="Enviar Quiz"/>
        </form>
    </div>
</body>
</html>
