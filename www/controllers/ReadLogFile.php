<?php

namespace Application\Controllers;
use Application\Models\News;

class ReadLogFile {

    public function actionReadErr()
    {
        $errlog = new News();
        $path = __DIR__ . '/../errors.log';
        $errlog->viewErrLog($path);
    }

} 