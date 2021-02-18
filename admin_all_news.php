<html>
<header>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</header>
<body>
<table class="table">
    <h1>Все новости:</h1>
    <tbody>
    <?php  foreach ($all_news as $row)
    {?>
        <tr>
            <td><?php echo $row['news_name']?></td>

            <td>

                    <?php echo $row['short_description']?>

            </td>
            <td> <?php echo $row['full_description']?></td>
            <td><?php echo $row['date']?></td>
             <td><form action="http://localhost/my_project/index.php/news/<?php echo $row['id']?>"method="DELETE">
                <button type="submit"> Удалить новость </button>
            </form>
            </td>
            <td><a href='http://localhost/my_project/index.php/admin/news/<?php echo $row['id']?>'>Редактировать новость</a></td>
        </tr>

    <?php } ?>

    </tbody>
</table>
<p>
    <a href="http://localhost/my_project/index.php/admin/news/create">Добавить новость</a>
</p>
<br/>


</body>

</html>

