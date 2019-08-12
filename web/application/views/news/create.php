<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<form action="/news/create" method="post">
    <?= csrf_hidden() ?>
    <label for="title">Title</label>
    <input type="input" name="title" /><br />

    <label for="text">Text</label>
    <textarea name="text"></textarea><br />

    <input type="submit" name="submit" value="Create news item" />
</form>