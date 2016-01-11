<?php
/**
 * Created by PhpStorm.
 * User: DoSoft
 * Date: 11/1/2015
 * Time: 3:38 AM
 */

namespace SITE\Form;

class EncryptHash extends \Zend\Crypt\Password\Bcrypt {

    public function __construct(){
        $this->setSalt( DS_SALT );
        $this->setCost( DS_COST );
    }
    public  function  setCode($ucode){

        return $this->create( $ucode );

    }
    public function codeValide($ucode, $scode){

        if( $this->verify( $ucode, $scode ) ){

            return true;
        }
        return false;
    }
} 