<?php

namespace Application\Controllers;

use Application\Models\News;
use Application\Classes\View;
use Application\Classes\E404Exception;
use Application\Classes\My_phpmailer;

class AddNews
{

    public function  actionAdd()
    {
        $article = new News();
        $article->date = $_POST['date'];
        $article->title = $_POST['title'];
        $article->text_news = $_POST['text_news'];
        $article->save();
        $view = new View();
        $view->item = $article;
        $view->display('template_OneNews.php');

        $mail = new My_phpmailer(true);
        $mail->CharSet = 'utf-8';
        $mail->isSMTP();
        $mail->addAddress('ad060778@gmail.com');
        $mail->Subject = 'Добавлена новая статья';
        $mail->Body = date('d.m.Y H:i:s') . ' На сайт test.local добавлена новая статья';
        $mail->send();
        $mail->clearAddresses();
        $mail->clearAttachments();
    }
}
