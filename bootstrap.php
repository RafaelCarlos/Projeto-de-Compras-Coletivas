// bootstrap.php
 
//vamos configurar a chamada ao Entity Manager, o mais importante do Doctrine
 
// o Autoload � respons�vel por carregar as classes sem necessidade de inclu�-las previamente
require_once "vendor/autoload.php";
 
// o Doctrine utiliza namespaces em sua estrutura, por isto estes uses
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
 
//onde ir�o ficar as entidades do projeto? Defina o caminho aqui
$entidades = array("src/model");
$isDevMode = true;
 
// configura��es de conex�o. Coloque aqui os seus dados
$dbParams = array(
    'driver'   =--> 'pdo_mysql',
    'user'     => 'root',
    'password' => 'rafael',
    'dbname'   => 'db_compras_coletiva',
);
 
//setando as configura��es definidas anteriormente
$config = Setup::createAnnotationMetadataConfiguration($entidades, $isDevMode);
 
//criando o Entity Manager com base nas configura��es de dev e banco de dados
$entityManager = EntityManager::create($dbParams, $config);