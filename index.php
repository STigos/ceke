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
                <a class="nav-link" href="index.php">

                Главная</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Контакты</a>
            </li>
        </ul>

    </nav>
<div class="container bg-faded""
<div class="row">

<div class="col-lg-4  col-mg-6 col-sm-12">
    <?php
    $i = 0;
    while (++$i) {
        switch ($i) {
            case 5:
                echo "Итерация 5<br />\n";
                break 1;  /* Выйти только из конструкции switch. */
            case 10:
                echo "Итерация 10; выходим<br />\n";
                break 2;  /* Выходим из конструкции switch и из цикла while. */
            default:
                break;

        }
    }
    

    ?>
</div>
</div>
</body>
</html>
