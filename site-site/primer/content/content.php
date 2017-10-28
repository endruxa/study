
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Starter Template for Bootstrap</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">

            <?php
            require_once'C:\OSPanel\domains\site-site\primer\functions\menu.php';
            drawmenu ($menu, 0);
            ?>

        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>

<div class="container">
    <div class="starter-template">
        <h1 style="color: <?= $headerColor?>"><?= $greet; ?>, сегодня <?= $day ?> день <?= $month ?> месяц <?= $year; ?> год</h1>
<p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>

        <?php
        require_once'C:\OSPanel\domains\site-site\primer\functions\menu.php';
        drawmenu ($menu, 1);
        ?>

</div>
</div>

<footer class="footer">
    <p>© Company <?= $year; ?></p>
</footer>
</body>
</html>