<?php
/**
 * Created by PhpStorm.
 * User: raphaeu
 * Date: 14/11/18
 * Time: 14:47
 */

namespace raphaeu;

class Colorize
{
    static private $color  = '37';
    static private $style  = '00';
    static private $backgroud  = '00';


    static public function clear()
    {
        return self::apply('37', '00', '00');
    }

    static public function none()
    {
        return self::apply(null, null, '00');
    }

    static public function bold()
    {
        return self::apply(null, null, '01');
    }

    static public function underline()
    {
        return self::apply(null, null, '04');
    }

    static public function italic()
    {
        return self::apply(null, null, '03');
    }

    static public function strikethrough()
    {
        return self::apply(null, null, '09');
    }

    static public function blink()
    {
        return self::apply(null, null, '05');
    }

    static public function reverse()
    {
        return self::apply(null, null, '07');
    }

    static public function ocult()
    {
        return self::apply(null, null, '08');
    }

    static public function black($backgroud=null)
    {
        return is_null($backgroud)?self::apply('30'):self::apply(null, '40');
    }

    static public function red($backgroud=null)
    {
        return is_null($backgroud)?self::apply('31'):self::apply(null, '41');
    }

    static public function green($backgroud=null)
    {
        return is_null($backgroud)?self::apply('32'):self::apply(null, '42');
    }

    static public function yellow($backgroud=null)
    {
        return is_null($backgroud)?self::apply('33'):self::apply(null, '43');
    }

    static public function blue($backgroud=null)
    {
        return is_null($backgroud)?self::apply('34'):self::apply(null, '44');
    }

    static public function magenta($backgroud=null)
    {
        return is_null($backgroud)?self::apply('35'):self::apply(null, '45');
    }

    static public function ciano($backgroud=null)
    {
        return is_null($backgroud)?self::apply('36'):self::apply(null, '46');
    }

    static public function white($backgroud=null)
    {
        return is_null($backgroud)?self::apply('37'):self::apply(null, '47');
    }

    static private function apply($color, $backgroud=null, $style=null)
    {
        self::$color = !empty($color)?$color:self::$color;
        self::$backgroud = !empty($backgroud)?$backgroud:self::$backgroud;
        self::$style = !empty($style)?$style:self::$style;


        return "\033[".(self::$style).(self::$color=='37'?'':';'.self::$color).(self::$backgroud=='00'?'':';'.self::$backgroud)."m";
    }
}