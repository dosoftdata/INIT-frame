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
    class MailTo extends \Php247\Form\Com\Mail\AsbtractMail{
        public   $old_sendmail_from = null,
                 $env_name = '';

        /**
         * Constructeur
         *
         * @return null
         */
        public function __construct(){
            $this->MailTo();
        }

        /**
         * attacher un fichier binaire en pièce jointe
         *
         * @param
         *        	string nom du fichier
         * @param
         *        	string contenu binaire du fichier
         * @return null
         */
     public function addbinattachement($filename, $source) {
            array_push( $this->attachement, array(
                'filename' => $filename,
                'source' => $source
            ) );
        }
      public function setAllFrom($email, $name) {
            $this->addfrom( $email, $name );
            $this->returnpath = $this->hfrom;
            $this->Xsender = $this->hfrom;
            $this->ErrorsTo = $this->hfrom;
            $this->old_sendmail_from = ini_set( 'sendmail_from', $email );
        }

        /**
         * surcharge de la fonction d'origine de simplemail afin d'include les attachements de fichier binaire
         *
         * @param
         *        	array tableau des attachements
         * @param
         *        	string séparateur
         * @return null
         */
      public function writeattachement($attachement, $B) {
            $message = '';
            if( isset( $attachement ) && is_array($attachement)) {
                foreach( $attachement as $AttmFile ) {
                    $patharray = explode( "/", $AttmFile ['filename'] );
                    $FileName = $patharray [count( $patharray ) - 1];

                    $message .= "\n--" . $B . "\n";

                    if(! empty( $AttmFile ['cid'] )) {
                        $message .= "Content-Type: {$AttmFile['contenttype']};\n name=\"" . $FileName . "\"\n";
                        $message .= "Content-Transfer-Encoding: base64\n";
                        $message .= "Content-ID: <{$AttmFile['cid']}>\n";
                        $message .= "Content-Disposition: inline;\n filename=\"" . $FileName . "\"\n\n";
                    } else {
                        $message .= "Content-Type: application/octetstream;\n name=\"" . $FileName . "\"\n";
                        $message .= "Content-Transfer-Encoding: base64\n";
                        $message .= "Content-Disposition: attachment;\n filename=\"" . $FileName . "\"\n\n";
                    }
                    # ****************************************************
                    # Modification pour récupérer la source dans le tableau si elle est renseigner
                    if(! isset( $AttmFile ['source'] )) {
                        $fd = fopen( $AttmFile ['filename'], "rb" );
                        $FileContent = fread( $fd, filesize( $AttmFile ['filename'] ) );
                        fclose( $fd );
                    } else {
                        $FileContent = $AttmFile ['source'];
                    }
                    # FIN Modification
                    # ****************************************************
                    $FileContent = chunk_split( base64_encode( $FileContent ) );
                    $message .= $FileContent;
                    $message .= "\n\n";
                }
                $message .= "\n--" . $B . "--\n";
            }
            return $message;
        }

        /**
         * surcharge de la fonction d'origine de simplemail afin d'annuler le retour à la ligne automatique
         *
         * @param
         *        	string contenu
         * @return string contenu modifié
         */
      public  function BodyLineWrap($Value) {
            return $Value;
        }
        /**
         * surcharge de la fonction d'origine de simplemail afin de traiter les erreurs
         *
         * @return string erreur PHP eventuelle
         */
       public function sendmail() {
            ob_start();
            parent::sendmail();
            $erreur = trim( strip_tags( ob_get_clean() ) );
            if($this->old_sendmail_from)
                ini_set( 'sendmail_from', $this->old_sendmail_from );
            if($erreur) {
                return $erreur;
            }
            return null;
        }
        /**
         * prevent cloning of the object: issues an E_USER_ERROR if this is attempted
         */
        public function __clone() {
            trigger_error ( 'Cloning the MailTo is not permitted', E_USER_ERROR );
        }

    }