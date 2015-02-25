<?php foreach ($items as $item): ?>
    <h1><?php echo $item->title; ?></h1>
    <div><?php echo $item->date; ?></div>
    <div><?php echo file_get_contents(__DIR__ . '/../../' . $item->path); ?></div>
    <?php endforeach; ?>
<BR>
<div><?php include __DIR__ . '/addform.php'; ?></div>