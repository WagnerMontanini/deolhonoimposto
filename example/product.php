<?php
require __DIR__ . "/assets/config.php";
require __DIR__ . "/../vendor/autoload.php";

use WagnerMontanini\DeOlhoNoImposto\Product;

$product = new Product("v1", "token");


/**
 * product
 */
echo "<h1>PRODUCT</h1>";

$create = $product->product([
    "CNPJ"=> "",
    "Codigo"=> "",
    "UF"=> "",
    "EX"=> 0,
    "CodigoInterno"=> "",
    "Descricao"=> "",
    "UnidadeMedida"=> "",
    "Valor"=> "",
    "Gtin"=> ""
]);

if ($create->error()) {
    echo "<p class='error'>{$create->error()->message}</p>";
} else {
    var_dump($create->response());
}