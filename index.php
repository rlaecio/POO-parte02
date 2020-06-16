<?php
ini_set("display_erros", 1);
require_once "autoload.php";

use classes\funcionarios\Diretor;
use classes\funcionarios\Designer;
use classes\abstratas\Funcionario;
use classes\sistemaInterno\GerenciadorBonificacao;


$diretor = new Diretor("233.333.333.33", 30000.00);
$diretor->senha =  "123456";
$designer = new Designer("322.222.222.22");

$gerenciador = new GerenciadorBonificacao();
$gerenciador->AutentiqueAqui($diretor, "123456");

$gerenciador->registrar($diretor);
var_dump($gerenciador->getTotalBonificacoes());
echo "<br>";echo "<pre>";

var_dump($diretor->autenticar("123456"));

echo $designer->getBominicacao(); 
echo "<br>";
echo $diretor->getBominicacao();
echo "<br>";

var_dump($diretor);
echo "<br>";
var_dump($designer);
echo "<br>";

$designer->aumentarSalario();
$diretor->aumentarSalario();

var_dump($diretor);
echo "<br>";
var_dump($designer);
echo "<br>";
?>
