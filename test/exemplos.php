<?php
/**
 * Created by PhpStorm.
 * User: raphaeu
 * Date: 14/11/18
 * Time: 14:47
 */

require __DIR__.'/../vendor/autoload.php';


use \raphaeu\Colorize;


echo Colorize::blue()."!!".Colorize::bold().Colorize::red('1')."Ocorreu um erro inesprado.".Colorize::clear();
