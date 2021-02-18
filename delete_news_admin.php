<html>
<header>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</header>
<body>
<tbody>
<?php  foreach ($delete_news as $row1)
{?>
    <td><?php $row1->delNewsOne($_GET['id'])?>Удалить новость</></td>
<?php } ?>
</tbody>
</body>
</html>
