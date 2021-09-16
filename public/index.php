<?php

namespace App;

require __DIR__ . "/../vendor/autoload.php";


use OlaMundo\BomDia;
use OlaMundo\BomSabado;
use Tchau\BoaNoite;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$bomDia = new BomDia();
$boaNoite = new BoaNoite();
$bomSabado = new BomSabado();


echo $bomDia->exibirMensagem();
echo PHP_EOL;
echo $boaNoite->exibirMensagem();
echo PHP_EOL;
echo $bomSabado->exibirMensagem();
echo PHP_EOL;

$log = new Logger("name");
$log->pushHandler(new StreamHandler ("app.log", Logger::WARNING));
$log->warning($boaNoite->exibirMensagem());
