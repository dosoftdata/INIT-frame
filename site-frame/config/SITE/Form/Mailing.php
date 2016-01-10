<?php
/**
 * Created by PhpStorm.
 * User: DoSoft
 * Date: 10/25/2015
 * Time: 4:16 PM
 */

namespace Php247\Form;


use  Zend\Mail\Transport\Sendmail as MailIt;

/**
 * Class Mailing
 * @package Php247\Form
 */
class Mailing  extends \Zend\Mail\Message{

    /**
     * Sends the mail message.
     * @param type $recipient
     * @param type $subject
     * @param type $text
     * @return boolean
     */
    private static $options  = null,
                   $cursor   = null,
                   $sentMail = null;
 /**/
  public  function __construct( array $_options ) {

      //parent::__construct();
      self::$options = $_options;

      $this->setBody(self::$options['template']);
      $this->setFrom(self::$options['sendermail'], self::$options['senderName']);
      $this->addTo(self::$options['recipientmail'], self::$options['recipientName']);
      $this->setSubject(self::$options['Subject']);

      self::mailTo( $this );

    }

    private static  function mailTo($message){
        try {

            self::$cursor   = false;
            self::$sentMail = new MailIt();
            self::$sentMail->send( $message );
            self::$cursor   = true;

        } catch(\Exception $e) {

            self::$cursor = false;
        }

       return self::$cursor;
    }

} 