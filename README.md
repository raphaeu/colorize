colorize
=========

[![Latest Stable Version](https://img.shields.io/packagist/v/raphaeu/colorize)](https://packagist.org/packages/raphaeu/colorize)
[![Total Downloads](https://img.shields.io/packagist/dt/raphaeu/colorize)](https://packagist.org/packages/raphaeu/colorize)
[![Author](https://img.shields.io/badge/author-raphaeu-blue.svg)](https://www.linkedin.com/in/rafael-aguiar-74824922/)
[![License](https://img.shields.io/github/license/raphaeu/colorize)](https://packagist.org/packages/raphaeu/colorize)

Biblioteca para colorir textos em console line

Requisitos
------------

  - [PHP](https://php.net) >= 5.6

Instalando com composer
-----------------------

```bash
composer require raphaeu/colorize
```

Usando
------

```php
// Import 
use \raphaeu\Colorize;

// Exemplo de preenchimento de cor de fundo
echo Colorize::blue(true)."Cor do fundo azul.".Colorize::clear();

// Exemplo cor do texto
echo Colorize::red()."Cor do texto vermelho.".Colorize::clear();

// Exemplo style negrito no texto
echo Colorize::bold()."Texto em negrito. ".Colorize::clear();

```
#### Também pode ser feito combinações
```php
//Exemplo combinando métodos

echo Colorize::blue(true).Colorize::bold().Colorize::blue()."Texto na cor azul em negrito e com fundo vermelho. ".Colorize::clear();
```
#### Dicas
-Sempre que iniciar uma colorização ou style de texto precisa ao final dos caracteres desejados chamar o método *Colorize::clear()* para encerrar a área de aplicação.
Exemplo:
```php
echo "Colorindo o texto com a cor".Colorize::blue()."azul".Colorize::clear()." nesse exemplo.";
```
-Para aplicar a cor no background basta passar *true* na chamada da função de colorir.
Exemplo:
```php
echo Colorize::blue(true)." Cor do fundo azul.".Colorize::clear() ;
```


#### Principais métodos
| método                 | descrição                        |
|------------------------|--------------------------------- |
| Colorize::white()      | Aplica a cor azul no texto       |
| Colorize::ciano()      | Aplica a cor ciano no texto      |
| Colorize::magenta()    | Aplica a cor magenda no texto    |
| Colorize::blue()       | Aplica a cor azul no texto       |
| Colorize::yellow()     | Aplica a cor amarelo no texto    |
| Colorize::green()      | Aplica a cor verde no texto      |
| Colorize::red()        | Aplica a cor vermelho no texto   |
| Colorize::black()      | Aplica a cor preto no texto      |
| Colorize::bold()       | Aplica o style negrito no texto  |
| Colorize::italic()     | Aplica o style italico no texto  |
| Colorize::underline()  | Aplica o style underline no texto|
| Colorize::bold()       | Aplica o style negrito no texto  |
| Colorize::none()       | Retira style e a cor do texto    |
| Colorize::clear()      | Retira style e a cor do texto    |




Changelog
---------

A lista de mudanças você pode encontrar na página [GitHub Releases](https://github.com/raphaeu/async/releases).

Soluções de problemas
---------------------

Por favor, reporte os bugs para [GitHub Issue Tracker](https://github.com/raphaeu/async/issues).

Copyright
---------

Este projeto está licenciado sob a [MIT License](https://github.com/raphaeu/async/blob/master/LICENSE).
