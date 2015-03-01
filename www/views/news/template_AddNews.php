<form action="/index.php?ctrl=AddNews&act=Add" method="post" enctype="multipart/form-data">
    <label for="title">Название статьи</label>
    <input type="text" id="title" name="title">
    <input type="hidden" id="date" name="date" value="<?php $today_date = date('d.m.Y');
    $today_time = date('H:i:s');
    echo 'добавлено ' . $today_date . ' в ' . $today_time; ?>"/>
    <label for="news">Файл</label>
    <input type="file" id="path" name="path">
    <input type="submit">
    </form>