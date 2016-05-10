<?php

class MessageContact {

    private $sEmail;
    private $sObjet;
    private $sMessage;

    public function __construct($email, $objet, $message) {
        $this->sEmail = $email;
        $this->sObjet = $objet;
        $this->sMessage = $message;
    }

    public function send() {
        echo '<br /> Merci  ' . $this->sEmail;
    }

}

?>