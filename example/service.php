<?php
require __DIR__ . "/assets/config.php";
require __DIR__ . "/../vendor/autoload.php";

use WagnerMontanini\DeOlhoNoImposto\Service;

$service = new Service("v1", "token");

/**
 * service
 */
echo "<h1>SERVICE</h1>";

$create = $service->service([
    "CNPJ"=> "",
    "Codigo"=> "",
    "UF"=> "",
    "Descricao"=> "",
    "UnidadeMedida"=> "",
    "Valor"=> ""
]);

if ($create->error()) {
    echo "<p class='error'>{$create->error()->message}</p>";
} else {
    var_dump($create->response());
}
