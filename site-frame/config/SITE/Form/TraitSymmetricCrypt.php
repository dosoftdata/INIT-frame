<?php
namespace SITE\Form;

trait TraitSymmetricCrypt {

    private static $_msSecretKey  = DS_SALT,#Encryption/decryption key
                      $_msHexaIv  = DS_HEX_SYMMETRIC, #The initialization vector
              $_msCipherAlgorithm = MCRYPT_RIJNDAEL_128; #Use the Rijndael Encryption Algorithm

    /* Function encrypts plain-text string received as parameter
       and returns the result in hexadecimal format */
    public static function Encrypt($plainString){
        #Pack SymmetricCrypt::_msHexaIv into a binary string
        $binary_iv = pack('H*', self::$_msHexaIv);
        #Encrypt $plainString
        $binary_encrypted_string = mcrypt_encrypt(
            self::$_msCipherAlgorithm,
            self::$_msSecretKey,
            $plainString,
            MCRYPT_MODE_CBC,
            $binary_iv);
        #Convert $binary_encrypted_string to hexadecimal format
        $hexa_encrypted_string = bin2hex($binary_encrypted_string);
        return $hexa_encrypted_string;
    }

    /* Function decrypts hexadecimal string received as parameter
       and returns the result in hexadecimal format */
    public static function Decrypt($encryptedString){
        #Pack Symmetric::_msHexaIv into a binary string
        $binary_iv = pack('H*', self::$_msHexaIv);
        #Convert string in hexadecimal to byte array
        $binary_encrypted_string = pack('H*', $encryptedString);
        #Decrypt $binary_encrypted_string
        $decrypted_string = mcrypt_decrypt(
            self::$_msCipherAlgorithm,
            self::$_msSecretKey,
            $binary_encrypted_string,
            MCRYPT_MODE_CBC,
            $binary_iv);

        return $decrypted_string;
    }

} 