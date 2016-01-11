<?php
namespace SITE\Translate;

/**
 * TranslateAbstract
 * 
 * @package _DS_website
 * @author Clement Mukendi
 * @copyright 2015
 * @version $Id$
 * @access abstract
 */

abstract class TranslateAbstract implements \Php247\Translate\TranslateInterface{

    public  static function getUserLanguage(){
        return USER_LANG;
    }
   /**
    * TranslateAbstract::matchWord()
    *
    * @param mixed $sword
    * @param mixed $word
    * @return
    */
   public static function matchWord($sword ,array $word = [] ){
        if (array_key_exists($sword, $word)) :
             return $word[$sword];
        else :
            return $sword;
        endif;
    }

    public static function  oCover(){
        return true;
    }

}