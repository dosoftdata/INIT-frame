<?php
/**
 * Created by PhpStorm.
 * User: DoSoft
 * Date: 10/14/2015
 * Time: 11:34 AM
 */
namespace Php247\Form;
use Php247\Translate\TranslateAbstract as arrayKey;

class Regex extends arrayKey{
    /**/
    use \Php247\Form\InputRegex,
        \Php247\Traitzend\dsEscape;
    /**/
    private function __construct(){}
    /**/
    public static function get( $string ){
        if( !empty( $string )){
            return self::matchWord(self::doEscape( $string ), self::regexPattern());
        }
        return $string;
    }
}