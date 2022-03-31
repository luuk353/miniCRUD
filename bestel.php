<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/main.css">
</head>

<body>
    <header>
        <a href="index.php">index page</a>
        <a href="bestel.php">bestellijst</a>
        <a href="login.php">log in</a>
        <div class = "image" onclick="location.href='winkelmand.php';" style="cursor: pointer;">
        </div>
    </header>
    <main>
    <div class="bestellingen">
    <?php
    for ($i=0; $i <5 ; $i++) { 
        include("WORKSHOP.php");
    }
    ?>
    </div>

</main>
    <footer>

    </footer>
</body>

</html>