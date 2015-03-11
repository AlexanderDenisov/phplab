<h1><?php echo $item->title; ?></h1>
<div><?php echo $item->date; ?></div>
<div><?php echo $item->text_news; ?>
    <a href="/AllNews/All"> <<< Назад к списку новостей</a></div>

<div><?php include __DIR__ . '/template_Delete.php'; ?></div>

<div><?php include __DIR__ . '/template_Update.php'; ?></div>