<h1><?php echo $item->title; ?></h1>
<div><?php echo $item->date; ?></div>
<div><?php echo file_get_contents(__DIR__ . '/../../' . $item->path); ?>
    <a href="/index.php?ctrl=AllNews&act=All"> <<< Назад к списку новостей</a></div>