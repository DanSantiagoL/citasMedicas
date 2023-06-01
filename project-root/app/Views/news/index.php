<h2><?= esc($title) ?></h2>

<?php if (! empty($news) && is_array($news)): ?>

    <?php foreach ($news as $news_item): ?>

        <h3>Hola <?= esc($news_item['nombres']) ?> <?= esc($news_item['apellidos']) ?></h3>

        <div class="main">
            <?= esc($news_item['fecharealizacion']) ?><br>
            <?= esc($news_item['fechacita']) ?>
            <?= esc($news_item['motivo']) ?>
        </div>
        <p><a href="/news/<?= esc($news_item['slug'], 'url') ?>">View article</a></p>

    <?php endforeach ?>

<?php else: ?>

    <h3>No News</h3>

    <p>Unable to find any news for you.</p>

<?php endif ?>