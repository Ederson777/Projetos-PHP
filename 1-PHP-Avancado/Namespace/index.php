<?php

require 'sobre1.php';
require 'Sobre2.php';

$sobre = new \aplicacao\v1\Sobre();

echo "Versao : ".$sobre->getVersao();

?>