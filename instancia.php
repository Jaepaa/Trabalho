<?php
require "conta.php";
require "cliente.php";

$conta = new Conta("02836","Rodolfo Pinto Castrado","1,724,05");
$cliente = new Cliente("15732","Rodolfo Pinto Castrado","374.804.737-40","rodolfopintocastrado@gmail.coom",$conta);


echo "---------------------".PHP_EOL;
echo $cliente->exibirConta()->exibirCode();
