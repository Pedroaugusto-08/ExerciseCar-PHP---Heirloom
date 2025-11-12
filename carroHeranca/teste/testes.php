<?php
require_once '../classes/Veiculo.php';
require_once '../classes/Carro.php';
require_once '../classes/Moto.php';

$carro1 = new Carro("Honda", "civic", 2000, 80, 90);
echo $carro1->exibirPortas(4);
echo $carro1->abrirPorta(2);
echo $carro1->situacaoInicial();
echo $carro1->acelerar(90);
echo $carro1->frear(45);

$moto1 = new Moto("Honda", "Sahara XRE", 2024, 93.50);
echo $moto1->situacaoInicial();
echo $moto1->empinar();
echo $moto1->situacaoInicial();
echo $moto1->acelerar(99.98);
echo $moto1->frear(-1);


$moto2 = new Moto("Yamaha", "XJ6", 2019, 19.75);
echo $moto2->situacaoInicial();
echo $moto2->empinar();
echo $moto1->situacaoInicial();
echo $moto1->acelerar(35.54);
echo $moto1->frear(20);
?> 