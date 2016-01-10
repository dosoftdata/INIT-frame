<?php
/**
 * Created by PhpStorm.
 * User: DoSoft
 * Date: 11/4/2015
 * Time: 11:42 PM
 */

namespace Php247\Form;

class ImageUpload extends \Php247\Form\ImageFilter {
    /**
     * The directory where we save image files.
     * @var string
     */
    protected $saveToDir = 'data/docs/',
                   $name = null;
    #
    public function __construct( $filePath ){
        if( isset($filePath) && is_dir($filePath) ){
            $this->saveToDir = $filePath;
        }
    }
    /**
     * Returns path to the directory where we save the image files.
     * @return string
     */
    private function getSaveToDir() {
        return $this->saveToDir;
    }
    #
    public function saveFile($file,$newName){

        if(!is_dir($this->saveToDir)) {
            if(!mkdir($this->saveToDir)) {
                throw new \Zend\Exception('Could not create directory for uploads: '. error_get_last());
            }
        }
        try{
            if ( !is_readable( $this->getSaveToDir() ) ) {
                return false;
            }
            $extension = self::getExtension($file);
            switch( $extension ){
                case self::$_fileExtension[3]:
                case self::$_fileExtension[4]:
                case self::$_fileExtension[5]:
                case self::$_fileExtension[6]:
                $this->name  = (string)$newName.".".$extension;
                if( self::fileSize( $this->name) ){
                    move_uploaded_file( $file, $this->getSaveToDir().$this->name);
                    return true;
                }
                return false;
                break;
                default :
                    $score = intval( self::GetScore($file) );
                    if(isset($score) && $score < 40 ) {
                        $this->name  = (string)$newName.".".$extension;
                        if( self::fileSize( $this->name ) ){
                            move_uploaded_file( $file, $this->getSaveToDir().$this->name);
                            return true;
                        }
                        return false;
                    }
                    return false;
                break;
            }
        }catch (\Zend\Exception $e){
            throw new $e( 'Could not upload file: '. error_get_last() );
        }
    }
    #
    private  final static function fileSize($file){
        return intval( filesize($file) ) < intval(self::$_fileSize) ? true : false;
    }
}
