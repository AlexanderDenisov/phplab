<h1><?php echo $item->title; ?></h1>
<div><?php echo $item->date; ?></div>
<div><?php echo $item->text_news; ?>
    <a href="/index.php?ctrl=AllNews&act=All"> <<< Назад к списку новостей</a></div>


<form action="/index.php?ctrl=DeleteNews&act=Delete&id=<?php echo $item->id; ?>" method="post"
      enctype="multipart/form-data">
    <div><input type="submit" value="Удалить статью"></div>
</form>