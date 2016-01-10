<?php
/**
 * Logiciel : Definition de fonctions de MAIL
 *
 * Sans licence GPL.
 *
 * @author		Clement Mukendi <clement.mukendi@outlook.fr>
 * @version		1.3 - 12/16/2015
 */

namespace Php247\Form\Com\Mail;

interface  InterfaceMail {
    public function MailTo();
    public function makenameplusaddress($address,$name) ;
    public function addrecipient($newrecipient,$name='') ;
    public function addbcc($bcc,$name='') ;
    public function addcc($cc,$name='') ;
    public function addsubject($subject) ;
    public function addfrom($from,$name='') ;
    public function addreturnpath($return) ;
    public function addreplyto($replyto) ;
    #les attachements
    public function addattachement($filename) ;
    #les attachements html
    public function addhtmlattachement($filename,$cid='',$contenttype='') ;
    public function sendmail() ;
    public  function writeattachement($attachement,$B) ;
    public function BodyLineWrap($Value) ;
    public function makebody();
    #Mail Headers Methods
    public function MakeHeaderField($Field,$Value) ;
    public function AddField2Header($Field,$Value) ;
    public function makeheader() ;
    public function checkaddress($address) ;
    public function checkname($name) ;
    #Mail send by PHPmail
    public function phpmail() ;
    #Socket Function
    public function SocketStart() ;
    public function SocketStop() ;
    public function SocketSend($in,$wait='') ;
    #Mail Socket
    public function socketmailstart() ;
    public function socketmailsend($to);
    public function socketmailstop() ;
    public function socketmailloop();
    #Misc.
    public function error_log($msg='') ;
    public function CleanMailDataString($data);
} 