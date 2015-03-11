<?php
header($_SERVER['SERVER_PROTOCOL'] . ' 403 Forbidden');
?>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <title>403 Доступ запрещен</title>
    <style type="text/css">
        body {
            background-color: #fff;
            color: #666;
            text-align: center;
            font-family: arial, sans-serif;
        }

        div.dialog {
            width: 25em;
            padding: 0 4em;
            margin: 4em auto 0 auto;
            border: 1px solid #ccc;
            border-right-color: #999;
            border-bottom-color: #999;
        }

        h1 {
            font-size: 100%;
            color: #f00;
            line-height: 1.5em;
        }
    </style>
</head>

<body>

<div class="dialog">
    <h1>403 Доступ запрещен</h1>
    <?php echo $error; ?>

</div>
</body>
</html>