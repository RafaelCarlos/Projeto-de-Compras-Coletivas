<?php
include_once './cabecalho.php';

?>
<!DOCTYPE html>
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link href="bootstrap-3.3.4-dist/css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="css/Site.css" rel="stylesheet" type="text/css" />
    <link href="fontawesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="css/jasny-bootstrap.css" rel="stylesheet" type="text/css" /></link>


</head>
<body>



<?php
session_start();

if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
{
	unset($_SESSION['login']);
	unset($_SESSION['senha']);
	header('location:index.php');
	
        echo "Você tem que logar primeiro!";
}
$logado = $_SESSION['login'];
?>
<div class="jumbotron">
    <h1 align="center">Bem vindo <?php echo $logado . "!"?></h1>
   
  </div>

</body>
</html>