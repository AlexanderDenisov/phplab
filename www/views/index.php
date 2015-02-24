<?php foreach ($items as $item): ?>
    <h1><?php echo $item->title; ?></h1>
    <div><?php echo $item->date; echo $item->path; ?></div>
    <?php endforeach; ?>