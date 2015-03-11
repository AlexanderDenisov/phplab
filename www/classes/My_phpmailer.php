<?php


namespace Application\Classes;


class My_phpmailer extends \PHPMailer {

    public $From = 'ad060778@gmail.com';
    public $FromName = 'ad060778';
    public $Host = 'smtp.gmail.com';
    public $Mailer = 'smtp';
    public $WordWrap = 75;


    public function send() {
        $this->Subject = '[Yay for me!] '.$this->Subject;
        return parent::send();
    }

} 