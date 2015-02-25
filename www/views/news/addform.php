<form action="/../../index.php?ctrl=Admin&act=Add" method="post" enctype="multipart/form-data">
    <label for="title">Название статьи</label>
    <input type="text" id="title" name="title">
    <input type="hidden" id="date" name="date" value="<?php $today = date('d.m.Y');
    echo $today; ?>"/>
    <label for="news">Файл</label>
    <input type="file" id="path" name="path">
    <input type="submit">
</form>