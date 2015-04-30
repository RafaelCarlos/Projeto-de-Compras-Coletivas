<!DOCTYPE html>
<html>

    <head>

        <meta charset="UTF-8">

        <title>CodePen - Login Form</title>

        <link rel="stylesheet" href="resources/css/style.css" media="screen" type="text/css" />

    </head>

    <body>

        <span href="#" class="button" id="toggle-login">Log in</span>

        <div id="login">
            <div id="triangle"></div>
            <h1>Log in</h1>
            <form  method="post" action="operacao.php" id="formlogin" name="formlogin" >
                <input name="login" autofocus required type="email" placeholder="Email" />
                <input id="senha" name="senha" type="password" placeholder="Password" />
                <input type="submit" value="Log in" />
            </form>
        </div>

        <script src='http://codepen.io/assets/libs/fullpage/jquery.js'></script>

        <script src="resources/js/index.js"></script>


        <?php
        if ($_GET["erro"] == 1) {
            echo "Login e/ou Senha Incorretos!";
        } else if ($_GET["erro"] == 2) {
            echo "Acesso não permitido!";
        }
        ?>

    </body>

</html>



