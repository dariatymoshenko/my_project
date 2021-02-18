<html>
<header>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</header>
<body>


<form action="" method="POST">
    <input type="text" name="name" size="50" placeholder="Название новости" value="<?php echo isset($create_news['news_name'])?$create_news['news_name']:'Введите сюда название новости'; ?>" /><br />
    <input type="hidden" name="edit" value="1" /><br />
    <input type="text" name="title" size="50" placeholder="Короткое описание новости" value="<?php echo isset($create_news['short_description'])?$create_news['short_description']:'Введите сюда короткий текст новости'; ?>" /><br />
    <textarea name="text" rows="5" cols="80"><?php echo isset($create_news['full_description'])?$create_news['full_description']:'Введите сюда полный текст новости'; ?></textarea><br />
    <input type="submit" value="СОхранить" />
</form>
</body>
</html>