<html>
    <head>
        <title>Добавление новости</title>
    </head>
<body>
    <h1>Добавление новости</h1>
    <hr>

    <?php foreach ($this->errors as $error): ?>
        <div class="alert alert-danger">
            <?php echo $error->getMessage(); ?>
        </div>
    <?php endforeach; ?>

    <form action="/index/save/" method="post">
        <input type="text" name="title">
        <br>
        <textarea name="lead"></textarea>
        <br>
        <input type="submit">
    </form>

</body>
</html>