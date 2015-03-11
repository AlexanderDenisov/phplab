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

        $mail = new My_phpmailer;

        $mail->addAddress('ad060778@gmail.com', 'Александр Денисов');
        $mail->Subject = 'Добавлена новая статья';
        $mail->Body = 'Новая статья';

        if(!$mail->send()) {
            $e = new E404Exception(date('d.m.Y H:i:s') . ' Сообщение о добавлении новой статьи не отправлено!!!' . "\r\n");
            throw $e;
        }
        $mail->clearAddresses();
        $mail->clearAttachments();

        $view = new View();
        $view->item = $article;
        $view->display('template_OneNews.php');
    }

}
