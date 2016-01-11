<?php

namespace SITE\Url;
class Link{
    public static function Build($link, $type = 'http'){
        $base = (($type == 'http' || USE_SSL == 'no') ? 'http://' : 'https://') .
            getenv('SERVER_NAME');
        #If HTTP_SERVER_PORT is defined and different than default
        if (defined('HTTP_SERVER_PORT') && HTTP_SERVER_PORT != '80' &&
            strpos($base, 'https') === false
        ) {
            #Append server port
            $base .= ':' . HTTP_SERVER_PORT;
        }
        $link = $base . VIRTUAL_LOCATION . $link;
        #Escape html
        return htmlspecialchars($link, ENT_QUOTES);
    }

    public static function QueryStringToArray( $queryString){
        $result = array();
        if ( isset($queryString) ) :
            $elements = explode('&', $queryString);
            foreach ( $elements as $key => $value ) :
                $element = explode('=', $value);
                $result[urldecode($element[0])] =
                    isset($element[1]) ? urldecode($element[1]) : '';
            endforeach;
        endif;
        return $result;
    }
    /*sendHeaders(__FILE__,'application/type');*/
    public static function sendHeaders($script_name, $appType){
        $last_modified = filemtime($script_name);
        if ( isset($_SERVER['HTTP_IF_MODIFIED_SINCE']) ) :
            $if_modified_since = strtotime(preg_replace('/;.*$/', '', $_SERVER['HTTP_IF_MODIFIED_SINCE']));
            if ( $if_modified_since >= $last_modified ) :
                header('HTTP/1.0 304 Not Modified');
                exit();
            endif;
        endif;
        header('Last-Modified: ' . gmdate('D, d M Y H:i:s', $last_modified) . ' GMT');
        header('Expires: ' . gmdate('D, d M Y H:i:s', time() + 2592000) . ' GMT');
        header('Cache-Control: private, must-revalidate');
        header('Pragma: cache');
        if ( !$appType ) : header('Content-Type: application/javascript');
        else             : header('Content-Type:' . $appType);
        endif;
    }
    # Prepares a string to be included in an URL
    public static function CleanUrlText($string){
        # Remove all characters that aren't a-z, 0-9, dash, underscore or space
        $not_acceptable_characters_regex = '#[^-a-zA-Z0-9_ ]#';
        $string = preg_replace($not_acceptable_characters_regex, '', $string);
        # Remove all leading and trailing spaces
        $string = trim($string);
        # Change all dashes, underscores and spaces to dashes
        $string = preg_replace('#[-_ ]+#', '-', $string);
        # Return the modified string
        return strtolower($string);
    }
    /*
     * http:#stackoverflow.com/questions/4607684/curl-and-ping-how-to-check-whether-a-website-is-either-up-or-down
     * */
    private static function ping($sHost){
        $sUrl       = $sHost;
        $sUserAgent = $_SERVER['HTTP_USER_AGENT'];
        $aOptions   = [
            CURLOPT_RETURNTRANSFER => true,      # return web page
            CURLOPT_HEADER         => false,     # do not return headers
            CURLOPT_FOLLOWLOCATION => true,       # follow redirects
            CURLOPT_USERAGENT      => $sUserAgent, # who am i
            CURLOPT_AUTOREFERER    => true,       # set referer on redirect
            CURLOPT_CONNECTTIMEOUT => 1,          # timeout on connect (in seconds)
            CURLOPT_TIMEOUT        => 1,          # timeout on response (in seconds)
            CURLOPT_MAXREDIRS      => 5,         # stop after 5 redirects
            CURLOPT_SSL_VERIFYPEER => false,     # SSL verification not required
            CURLOPT_SSL_VERIFYHOST => false,     # SSL verification not required
        ];
            $ch  = curl_init( $sUrl );
                   curl_setopt_array( $ch, $aOptions );
                   curl_exec( $ch );
        $iStatus = curl_getinfo($ch, CURLINFO_HTTP_CODE);
                   curl_close($ch);
        return ($iStatus == HTTPSERVERSTATUS);
    }
    public static function eMailToHost($_sMail){
        $aMail = explode('@',$_sMail);
        $sMail = next($aMail);
        $sHost = W_3_DOT.$sMail;
        return (self::ping($sHost) === true);
    }
}/**/