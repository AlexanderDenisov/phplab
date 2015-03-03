<form action="/index.php?ctrl=AddNews&act=Add" method="post" enctype="multipart/form-data">

    <div><label for="title">Название статьи</label></div>
    <div><input type="text" id="title" name="title" maxlength="250"></div>

    <div><label for="text_news">Текст статьи</label></div>
    <div><textarea id="text_news" rows="10" cols="25" maxlength="250" name="text_news"></textarea></div>

    <input type="hidden" id="date" name="date" value="<?php $today_date = date('d.m.Y');
    $today_time = date('H:i:s');
    echo 'добавлено ' . $today_date . ' в ' . $today_time; ?>"/>

    <div><input type="submit" value="Отправить"></div>
</form>