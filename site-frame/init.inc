<?php
$aLoad = [
	'Config'=> 'config/config.inc',	
    'zf2' =>'config/Zend/zf2_autoload.php',
    'twig' => 'config/Twig/Autoloader.php',		
    'FrameSet'=>'config/SITE/load.inc'		
]; foreach ( $aLoad as $key => $value ): require_once $value; endforeach;
