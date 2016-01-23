<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-2.1.4.js"></script>
    <script src="js/bootstrap.js"></script>
</head>
<body class="">
<div class="collapse" id="collapsingNav">
    <h3 >контент</h3>
</div>
    <nav class="navbar navbar-light  ">
        <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar2">
            &#9776;
        </button>
        <div class="collapse navbar-toggleable-xs" id="exCollapsingNavbar2">
    <h2 class="navbar-brand" href="index.php">Кейк</h2>
        <ul class="nav navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Главная</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="action.php">Тесты PHP</a>
            </li>
        </ul>
    </nav>
<div class="container bg-faded""
<div class="row">
<div class="col-lg-4  col-mg-6 col-sm-12">
    <form action="action.php" method="post">
        <div class="input-group-sm">
            <input class="input-group" type="text" name="txt">
            <button class="btn btn-sm btn-secondary-outline" type="submit">&#9566</button>
        </div>
    </form>
</div>
    <div class="col-lg-4  col-mg-6 col-sm-12">
    <form action="action.php" method="post">
        <div class="input-group-sm">
            <input class="input-group" type="text" name="txt">
            <button class="btn btn-sm btn-secondary-outline" type="submit">&#9</button>
        </div>
    </form>
    </div><div class="col-lg-4  col-mg-6 col-sm-12">
    <form action="action.php" method="post">
        <div class="input-group-sm">
            <?php
                include_once 'action.php';
            echo MyFunc(12,34);
                spl_autoload_call('MyClass');
                $obj1 = new MyClass();
               echo $obj1->MyClassfunc();
                print ("\n");
            ?>
        </div>
    </form>
    </div>
    <div class="col-lg-pull-6 col-lg6 col-md-4 col-sm-12">
        <div class="card-block card-blockquote">
            <div class="card">
                <img class="card-img " src="images/">
                <p class="card-header">Заголовок</p>
                <p class="card-text">Текст расположенный на карте</p>
                <button class="btn btn-success-outline card-success-outline">Отправить</button>
            </div>
        </div>
    </div>
</div>
</body>
</html>
