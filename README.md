# DeOlhoNoImposto Library Test

[![Maintainer](http://img.shields.io/badge/maintainer-@wagnermontanini-blue.svg?style=flat-square)](https://twitter.com/wagnermontanini)
[![Source Code](http://img.shields.io/badge/source-wagnermontanini/deolhonoimposto-blue.svg?style=flat-square)](https://github.com/wagnermontanini/deolhonoimposto)
[![PHP from Packagist](https://img.shields.io/packagist/php-v/wagnermontanini/deolhonoimposto.svg?style=flat-square)](https://packagist.org/packages/wagnermontanini/deolhonoimposto)
[![Latest Version](https://img.shields.io/github/release/wagnermontanini/deolhonoimposto.svg?style=flat-square)](https://github.com/wagnermontanini/deolhonoimposto/releases)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE)
[![Build](https://img.shields.io/scrutinizer/build/g/wagnermontanini/deolhonoimposto.svg?style=flat-square)](https://scrutinizer-ci.com/g/wagnermontanini/deolhonoimposto)
[![Quality Score](https://img.shields.io/scrutinizer/g/wagnermontanini/deolhonoimposto.svg?style=flat-square)](https://scrutinizer-ci.com/g/wagnermontanini/deolhonoimposto)
[![Total Downloads](https://img.shields.io/packagist/dt/wagnermontanini/deolhonoimposto.svg?style=flat-square)](https://packagist.org/packages/cwagnermontanini/deolhonoimposto)

###### DeOlhoNoImposto Library is a small set of classes developed for integration with the DeOlhoNoImposto platform webservice.

DeOlhoNoImposto Library é um pequeno conjunto de classes desenvolvidas para integração ao webservice da plataforma DeOlhoNoImposto.

Você pode saber mais **[clicando aqui](https://deolhonoimposto.ibpt.org.br)**.

### Highlights

- Simple installation (Instalação simples)
- Abstraction of all API methods (Abstração de todos os métodos da API)
- Easy authentication with login and password (Fácil autenticação com Token)
- Composer ready and PSR-2 compliant (Pronto para o composer e compatível com PSR-2)

## Installation

Uploader is available via Composer:

```bash
"wagnermontanini/deolhonoimposto": "^1.0"
```

or run

```bash
composer require wagnermontanini/deolhonoimposto
```

## Documentation

###### For details on how to use, see a sample folder in the component directory. In it you will have an example of use for each class. It works like this:

Para mais detalhes sobre como usar, veja uma pasta de exemplo no diretório do componente. Nela terá um exemplo de uso para cada classe. Ele funciona assim:

#### PRODUTOS endpoint:

```php
<?php
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
```
#### SERVIÇOS endpoint:

```php
<?php
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
```
## Contributing

Please see [CONTRIBUTING](https://github.com/wagnermontanini/deolhonoimposto/blob/master/CONTRIBUTING.md) for details.

## Support

###### Security: If you discover any security related issues, please email wagnermontanini@hotmail.com.br instead of using the issue tracker.

Se você descobrir algum problema relacionado à segurança, envie um e-mail para wagnermontanini@hotmail.com.br em vez de usar o rastreador de problemas.

Thank you

## Credits

- [Wagner Montanini](https://github.com/wagnermontanini) (Developer)
- [All Contributors](https://github.com/wagnermontanini/deolhonoimposto/contributors) (This Rock)

## License

The MIT License (MIT). Please see [License File](https://github.com/wagnermontanini/deolhonoimposto/blob/master/LICENSE) for more information.