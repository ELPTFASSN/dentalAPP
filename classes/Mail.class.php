<?php

require_once CLASS_DIR . "mail/PHPMailerAutoload.php";
require_once CLASS_DIR . "mail/class.phpmailer.php";

class Mail extends PHPMailer {

    public $oMail = null;

    public function __construct() {


        parent::__construct();

        $this->oMail = new PHPmailer();
        $this->oMail->IsSMTP();

        $this->oMail->SMTPAuth = true;                  // enable SMTP authentication
        $this->oMail->SMTPSecure = "tls";                 // sets the prefix to the servier
        $this->oMail->Host = "smtp.gmail.com";      // sets GMAIL as the SMTP server
        $this->oMail->Port = 587;                   // set the SMTP port for the GMAIL server
        $this->oMail->Username = "sistema@intervolutions.com";  // GMAIL username
        $this->oMail->Password = "intervol2011";            // GMAIL password
    }

    public function inviaMail($to, $subject, $body, $from = EMAIL_FROM_ADDRESS, $fromName = EMAIL_FROM_NAME, $isHtml = true) {

        if (empty($to) || empty($subject) || empty($body))
            return NULL;

        $this->oMail->Subject = $subject;
        $this->oMail->Body = $body;

        if (is_array($to)) {

            foreach ($to as $key => $value) {
                $this->oMail->addAddress($value);
            }
        } else {

            $this->oMail->addAddress($to);
        }

        $this->oMail->isHTML($isHtml);
        $this->oMail->From = $from;
        $this->oMail->FromName = $fromName;

        $this->oMail->Body .= "<br /><br />Cordialmente<br />Easy Smile Group<br /><br /><hr><br /><i>Ricevi questa mail per il tuo utilizzo della piattaforma " . PLATFORM_NAME . ".<br />Qualora non dovesse essere stato lei a utilizzare questa piattaforma &egrave; pregato di contattarci all'indirizzo " . MAIL_ADMIN_CONTACT . "</i>";

        $returnVal = null;
        $i = 0;
        while (empty($returnVal)) {
            $returnVal = $this->oMail->Send();
            $i++;
            if ($i == 10)
                break;
        }
        $_SESSION['num_tentativi'] = $i;

        //chiudiamo la connessione
        $this->oMail->SmtpClose();
        unset($this->oMail);
        return $returnVal;
    }

}
