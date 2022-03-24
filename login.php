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
        <!-- <img id ="image" src = "img/winkelmand.png"> -->

        <div class = "image" onclick="location.href='winkelmand.php';" style="cursor: pointer;">
        </div>

    </header>
    <main>
            <form id="formulier">
                <P>log hier in: </P><br>
                <input type="text" name="user" placeholder="username"><br>
                <p>vul je wachtwoord in:</p><br>
                <input type="password" name="password" placeholder="password"><br>
                <input type="submit" name="submit" placeholder="submit"><br>
            </form>
        
    </main>
    <footer>

    </footer>

</body>

</html>