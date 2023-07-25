<?php 

require_once('Cliente.php');

$cliente = new Cliente('casa');
echo "Valor do financiamento R$ {$cliente->getFactory()
              ->getFinanciamento(1000)
              ->getValorMensal(10)}";
echo "<br/>";
$cliente2 = new Cliente('casa');
echo "Valor do seguro R$ {$cliente2->getFactory()
              ->getSeguro(200000, ['enchente','terremoto'])
              ->getValorMensal()}";
