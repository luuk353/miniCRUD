<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<header>

    <a href="index.php">index page</a>
    <a href="bestel.php">bestellijst</a>
    <a href="login.php">log in</a>
    <div class="image" onclick="location.href='winkelmand.php';" style="cursor: pointer;">
    </div>

    <?php
         include("connect.php");
        ?>
    
</header>
<main>
    <div class="parent-to-choices">
        <div class="to-bestellingen">
            <h1> <a href="bestel.php">naar de bestellijst </a> </h1>
            <p>als je hierboven klikt ga je naar de bestellijst stylestylestylestylestylestylestyle</p>
            <a href = "bestel.php">
                <button> naar de bestellijst</button>
            </a>
        </div>
        <div class="to-login">
            <h1> <a href = "login.php"> naar de inlog pagina </a> </h1>
            <p>als je hierboven klikt ga je naar de login pagina stylestylestylestylestylestyle</p>
            <a href = "login.php">
                <button> LOGIN</button>
            </a>
        </div>
    </div>
</main>
<footer>

</footer>
</body>

</html>