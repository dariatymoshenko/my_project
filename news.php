<html>
<header>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</header>
<body>
<table class="table">
    <!--<thead>
    <tr>
        <th scope="col">Name</th>
        <th scope="col">Short description</th>

        <th scope="col">Date</th>
    </tr>
    </thead>-->
    <tbody>
    <?php  foreach ($data as $row)
    {?>
    <tr>
        <td><?php echo $row['news_name']?></td>

        <td>
            <a href="http://localhost/my_project/index.php/news/<?php echo $row['id']?>">
                <?php echo $row['short_description']?>
            </a>
        </td>
        <td><?php echo $row['date']?></td>
    </tr>

    <?php } ?>
    </tbody>
</table>


</body>

</html>
