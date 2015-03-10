<?php


class Controller_ReadLogFile {

    public function actionReadErr()
    {
        $errlog = new NewsModel();
        $path = __DIR__ . '/../errors.log';
        $errlog->viewErrLog($path);
    }

} 