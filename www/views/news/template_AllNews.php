<?php foreach ($items as $item): ?>
    <h1><?php echo $item->title; ?></h1>
    <div><?php echo $item->date; ?></div>
    <div><?php echo file_get_contents(__DIR__ . '/../../' . $item->path, NULL, NULL, 0, 240);
        echo '...'; ?>
        <a href="/index.php?ctrl=OneNews&act=One&id=<?php echo $item->id; ?>">Читать новость полностью >>> </a></div>
<?php endforeach; ?>
<BR>
<div><?php include __DIR__ . '/template_AddNews.php'; ?></div>