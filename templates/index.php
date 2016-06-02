<html>
    <head>
        <style>
            article {
                margin-top: 10px;
                margin-bottom: 10px;
                border:1px dotted red;
                padding:5px;
            }
        </style>
        <title>Учебная страница новостей</title>
    </head>
<body>
    <h1>Новости</h1>
    <hr>
    <?php foreach ($this->news as $article) : ?>
    <article>
        <h3><?php echo $article->title; ?></h3>
        <div><?php echo $article->lead; ?></div>
    </article>
    <?php endforeach; ?>

    <editor>Некий текст</editor>

</body>
</html>