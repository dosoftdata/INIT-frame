<?php
/**
 * Created by CM.
 * User: DoSoft
 * Date: 8/29/2015
 * Time: 5:32 PM
 */
namespace Php247\Form;
use Php247\Db\DatabaseHandler as DbServices,
    Php247\PdfGen\HTML2PDF as PDF_PLUS_MAIL_TO;
class InputHandler extends DbServices{
    #Private constructor to prevent direct creation of object
    /**
     * The instance of the PDF+MailTo
     * @access private
     */
    private static $_oPdfWithMail;
    private function __construct(){}
    public function __clone(){
        throw new \Zend\Exception('Input object protected !');
    }
    protected static $_sComma =',';
    protected static $_NULL = null;
    private static $aInputsRequestMethods = [
        '_get' => '$_GET' , '_post' =>'$_POST',
        '_put' => 'PUT', '_delete' =>'DELETE',
        '_options' => 'OPTIONS', '_head'  => 'HEAD'
    ];
    public static function pdfMailTo() {
        self::$_oPdfWithMail = new PDF_PLUS_MAIL_TO();
        if( is_object(self::$_oPdfWithMail) ):
            return self::$_oPdfWithMail;
        else:
            return false;
        endif;
    }
    public static function sessionSet(){
        if( session_id() == self::$_NULL || !isset($_SESSION)) :
            session_start();
            session_regenerate_id (true);
        endif;
    }
    /**/
    public static function _data(){
        $sRequestChecker = $_SERVER['REQUEST_METHOD'];
        $_inputs = self::$_NULL;
        foreach( self::$aInputsRequestMethods as $key => $method ):
            if( $sRequestChecker === $method ):
               foreach ( $method as $data => $value ) :
                 if ( is_array($value) ) :
                   foreach ( $value as $dataValue ) :
                    $_inputs .= $dataValue.self::$_sComma;
                   endforeach;
                 else :
                    $_inputs .= $value.self::$_sComma;
                 endif;
              endforeach;
            endif;
        endforeach;
        return explode( self::$_sComma, self::safe($_inputs) );
    }
    /**/
    public static function data(){
        $_inputs = self::$_NULL;
                foreach ( $_POST as $data => $value ) :
                    if ( is_array($value) ) :
                        foreach ( $value as $dataValue ) :
                            $_inputs .= $dataValue.self::$_sComma;
                        endforeach;
                    else :
                        $_inputs .= $value.self::$_sComma;
                    endif;
                endforeach;
        return explode( self::$_sComma, self::safe($_inputs) );
    }
    public static function setSession( $name, $value ){
        $_SESSION[$name] = $value;
        return setcookie( $name, $_SESSION[$name], time()+60*60*24*COOKIE_TIME_OUT, "/");
    }
    public static function setSessions( array $paramsValues){
        if( isset($paramsValues ) && is_array( $paramsValues ) ):
            foreach( $paramsValues as $key => $value ):
                $_SESSION[$key] = $value;
                return setcookie( $key, $_SESSION[$key], time()+60*60*24*COOKIE_TIME_OUT, "/");
            endforeach;
        endif;
    }
    public static function unSetSession($name){
        unset( $_SESSION[$name] );
        session_unset();
        session_destroy();
        setcookie($name,self::$_NULL , time()-60*60*24*COOKIE_TIME_OUT, "/");
    }
    public static function getSession($name){
        return $_COOKIE[$name];
    }
    private static function triming($name){
        return trim($name);
    }
    public static function isEqual( $left,$right ){
        if( isset($left) && isset($right) ) :
             if(is_numeric($left) && is_numeric($right) ):
                if( self::triming($left)  === self::triming($right) ):
                    return true;
                endif;
             endif;
             if( is_string($left) && is_string($right) ):
                if( self::triming($left)  == self::triming($right) ):
                    return true;
                endif;
             endif;
        endif;
        return false;
    }
    /**/
    public static  function aNext(array $params){
        if( isset($params) && is_array($params) )
            return next($params);
        else
            return $params;
    }
    /**/
    public static  function aLast(array $params){
        if( isset($params) && is_array($params) )
            return end($params);
        else
            return $params;
    }
    /**/
    public static function aFirst(array $params){
        if( isset($params) && is_array($params) )
            return reset($params);
        else
            return $params;
    }
    //Prevent the sql injection
    private static function safe($str){
        $_str  = self::StripSlashes($str);
        $_str_ = self::BlockSQLInjection($_str);
        if ( isset($_str_) )
            $injections = ['/(\n+)/i', '/(\r+)/i', '/(\t+)/i', '/(%0A+)/i', '/(%0D+)/i', '/(%08+)/i', '/(%09+)/'];
            $_str_      = preg_replace($injections, self::$_NULL, $str);
        return trim($_str_);
    }
    /*
    SafeInput() function removes any potential threat from the
    data submitted. Prevents email injections or any other hacker attempts.
    if $remove_nl is true, newline characters are removed from the input.
    */
    private static function StripSlashes($str){
        $str = stripslashes($str);
        return $str;
    }
    /**/
    private static function BlockSQLInjection($str){
        $d1 = "'";
        $d2 = '"';
        $value = str_replace([$d1, $d2, $d1, $d2],
                             ["&#39;", "&quot;", "&#39;", "&quot;"], $str);
        return trim($value);
    }
    /**/
    public static function decodeJsonData(){
        $_data = \Zend\Json\Json::decode($_POST, \Zend\Json\Json::TYPE_ARRAY);
        if( is_array($_data )){
            return $_data;
        }
        return false;
    }
    /**
     * To use
     * 1. $aParams = [':name_1' => $value,':name_2' => $value];
     * 2. $sSlq = 'CALL procedure_name(:name_1,:name_2);
     * 3. oName::save($sSlq,$aParams);
     */
    public static function save( $sSlq, array $aParams){
        if( isset($sSlq) && is_string($sSlq) &&
            isset($aParams) && is_array($aParams)):
            try{
                self::Execute($sSlq,$aParams);
            }catch (\Zend\Exception $e){
                echo $e->getMessage(),
                     $e->getCode(),
                     $e->getFile(),
                     $e->getLine(),
                     $e->getTrace(),
                     $e->getTraceAsString();
                return false;
            }
            return true;
        endif;
        return false;
    }
    /**/
    public  static function fileWrite($data, $file){
        fwrite($file, $data);
        fclose($file);
    }
}