<?php
namespace SITE\Translate;
/**
 *
 * @author Clement
 * @Class Translate
 * @package Php247\Translate
 *
 */

class Translate extends \Php247\Translate\TranslateAbstract {
    /**/
    use \Php247\Translate\Englishtrait,
        \Php247\Translate\GreekTrait,
        \Php247\Translate\FrenchTrait,
        \Php247\Traitzend\dsEscape;
    /**/
    public  static $userLang = USER_LANG,
        $DOLANG = [
        'english' => 'en',
        'french' => 'fr',
        'greek' => 'el'
    ],$LangLetter =['English','Ελλανικά',"Français"];
    /**/
    private function __construct(){}
    /**
     * @param $string
     * @return mixed
     * @Note Get and Set user language manually
     */
    public static function doTranslate($string){
        switch ( self::setLocal(self::$userLang) ) :
            case self::$DOLANG['english']:
                return self::matchWord(self::doEscape($string), self::getEnglish());
                break;
            case self::$DOLANG['greek']:
                return self::matchWord(self::doEscape($string), self::getGreek());
                break;
            case self::$DOLANG['french']:
                return self::matchWord(self::doEscape($string), self::getFrench());
                break;
            default:
                return self::matchWord(self::doEscape($string), self::getEnglish());
                break;
        endswitch;
    }
    /**/
    public static function Get($key){
      return self::doTranslate($key);
    }
    /**/
    public static function setLocal($local){
        return self::_getAndSetUserlanguage($local);
    }
    /**/
    public static function _getAndSetUserlanguage($_lang){
        if ( isset($_GET['LANG']) && in_array($_GET['LANG'], self::$DOLANG) )
            return $_GET['LANG'];
        return $_lang;
    }
}