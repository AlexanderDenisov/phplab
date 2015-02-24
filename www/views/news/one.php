<h1><?php echo $item->title; ?></h1>
<div><?php echo $item->date; ?></div>
<div><?php echo file_get_contents(__DIR__ . '/../../' . $item->path); ?></div>