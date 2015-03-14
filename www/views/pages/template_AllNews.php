<div><?php include __DIR__ . '/template_FindByColumn.php'; ?></div>
<?php foreach ($items as $item): ?>
    <h1><?php echo $item->title; ?></h1>
    <div><?php echo $item->date; ?></div>
    <div><?php echo $item->text_news; ?>
        <a href="/OneNews/One/?id=<?php echo $item->id; ?>">Читать новость полностью >>> </a></div>
<?php endforeach; ?>
<BR>
<div><?php include __DIR__ . '/template_AddNews.php'; ?></div>
<?php

$timer = PHP_Timer::stop();
var_dump($timer);
echo PHP_Timer::secondsToTimeString($timer);
echo PHP_Timer::resourceUsage();
?>