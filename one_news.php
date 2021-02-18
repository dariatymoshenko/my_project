<html>
<header>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <style type="text/css">
    .list-group {

    font-size: 1.8em !important;
    }
    </style>

</header>
<body class="text-center">

<ul class="list-group">
    <li class="list-group-item active" aria-current="true"><h1><?php echo $row['news_name']?></h1></li>
    <li class="list-group-item"><?php echo $row['full_description']?></li>
    <li class="list-group-item"><?php echo $row['date']?></li>
</ul>

<div class="d-grid gap-2 col-6 mx-auto">
    <button class="btn btn-primary" onclick="document.location='http://localhost/my_project/index.php/news/'"type="button">Назад  </button>

</body>
</html>


</div>
</body>

</html>
