<?php if($articles): ?>

<?php foreach ($articles as $article): ?>
    <article>
    
        <h2><?php echo $article['title']; ?></h2>
        <p><?php echo $article['content']; ?></p>

    </article>
<?php endforeach; ?>

<?php endif; ?>