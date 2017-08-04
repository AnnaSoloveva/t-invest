<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Т-инвест</title>
    <meta name="author" content="">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width">
    <?php
    /*компиляция LESS в CSS (стили правятся в style.less)*/
    include('lessphpcomp.php'); ?>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script data-main="js/config.js" async="async" src="js/require.js"></script>
    <link rel="shortcut icon" href="img/favicon.ico">
</head>
<body>
<header>
    <div class="container-fluid">
        <div class="header-wrapper">
            <div class="logo-wrapper">
                <a class="logo" href="/"></a>
            </div>
            <div class="main-menu-wrapper">
                <?include ("menu.php")?>
            </div>
            <div class="phone-wrapper">
                <div><a href="tel:88000000000" class="phone">8-800-000-00-00</a></div>
                <div><a href="#" class="btn btn-default btn-lg"  data-toggle="modal" data-target="#OrderModal">Оставить заявку</a></div>
            </div>
            <div class="objects-menu hidden-xs">
                <a class="title" role="button" data-toggle="collapse" href="#collapseObject" aria-expanded="true" aria-controls="collapseObject">Объекты <i class="fa fa-caret-down" aria-hidden="true"></i></a>
                <div class="collapse in" id="collapseObject">
                    <ul>
                        <li><a data-id-object="1" href="/card-house.php">Садовое общество Лотос<span class="pull-right"><i class="fa fa-caret-right" aria-hidden="true"></i></span> </a> </li>
                        <li><a data-id-object="2" href="/card-house.php">ул. 1 Линия<span class="pull-right"><i class="fa fa-caret-right" aria-hidden="true"></i></span> </a> </li>
                        <li><a data-id-object="3" href="/card-house.php">ул. Ботаническая<span class="pull-right"><i class="fa fa-caret-right" aria-hidden="true"></i></span> </a> </li>
                        <li><a data-id-object="4" href="/card-house.php">ул. Демина<span class="pull-right"><i class="fa fa-caret-right" aria-hidden="true"></i></span> </a> </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>