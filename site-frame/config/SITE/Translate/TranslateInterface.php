<?php
namespace Php247\Translate;

/**
 *
 * @author Clement
 *
 */
interface TranslateInterface{
    public static  function getUserLanguage();
    public static function matchWord($sword, array $word);
    public static function oCover();
}