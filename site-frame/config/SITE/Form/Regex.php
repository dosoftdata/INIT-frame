<?php

namespace SITE\Form;
use SITE\Translate\TranslateAbstract as arrayKey;

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