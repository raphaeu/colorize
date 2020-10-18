<?php
/**
 * Created by PhpStorm.
 * User: raphaeu
 * Date: 14/11/18
 * Time: 14:47
 */

require __DIR__.'/../vendor/autoload.php';


use \raphaeu\Colorize;


echo Colorize::blue(true)."Cor do fundo azul.".Colorize::clear().PHP_EOL;
echo Colorize::yellow(true)."Cor do fundo amarelo.".Colorize::clear().PHP_EOL;
echo Colorize::red(true)."Cor do fundo vermelho.".Colorize::clear().PHP_EOL;
echo Colorize::ciano(true)."Cor do fundo ciano.".Colorize::clear().PHP_EOL;
echo Colorize::green(true)."Cor do fundo verde.".Colorize::clear().PHP_EOL;
echo Colorize::white(true)."Cor do fundo branco.".Colorize::clear().PHP_EOL;

echo Colorize::blue()."Cor do texto azul.".Colorize::clear().PHP_EOL;
echo Colorize::yellow()."Cor do texto amarelo.".Colorize::clear().PHP_EOL;
echo Colorize::red()."Cor do texto vermelho.".Colorize::clear().PHP_EOL;
echo Colorize::ciano()."Cor do texto ciano.".Colorize::clear().PHP_EOL;
echo Colorize::green()."Cor do texto verde.".Colorize::clear().PHP_EOL;
echo Colorize::white()."Cor do texto branco.".Colorize::clear().PHP_EOL;


echo Colorize::bold()."Texto em negrito.".Colorize::clear().PHP_EOL;
echo Colorize::underline()."Texto em underline.".Colorize::clear().PHP_EOL;
echo Colorize::italic()."Texto em italico.".Colorize::clear().PHP_EOL;
echo Colorize::strikethrough()."Texto riscado.".Colorize::clear().PHP_EOL;


