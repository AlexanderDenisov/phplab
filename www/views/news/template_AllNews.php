<?php foreach ($items as $item): ?>
    <h1><?php echo $item->title; ?></h1>
    <div><?php echo $item->date; ?></div>
    <div><?php echo $item->text_news; ?>
        <a href="/index.php?ctrl=OneNews&act=One&id=<?php echo $item->id; ?>">Читать новость полностью >>> </a></div>
<?php endforeach; ?>
<BR>
<div><?php include __DIR__ . '/template_AddNews.php'; ?></div>