<?php


namespace Application\Classes;


class My_phpmailer extends \PHPMailer
{
    public $Host = 'smtp.yandex.com';
    public $Port = 465;
    public $SMTPSecure = 'ssl';
    public $SMTPAuth = true;
    public $Username = 'alexx-denisov';
    public $Password = '';
    public $From = 'alexx-denisov@yandex.ru';
    public $FromName = 'Admin';
    public $WordWrap = 75;

    //public $SMTPDebug = 3;


    /*protected function edebug($msg)
    {
        print('My Site Error');
        print(' Description:');
        printf('%s', $msg);
        exit;
    }*/

    public function send()
    {
        $this->Subject = '[test.local] ' . $this->Subject;
        if(!parent::send()) {
            $msgerror = new \phpmailerException();
            throw $msgerror;
        } return parent::send();
    }
}
