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
    <?php include_once ("includes/header.php");?>
    <main>
        
        <form name ="form" id="formulier" action="php/loginvalidate.php" method="post">
            <P>log hier in: </P><br>
            <input type="text" name="username" placeholder="username" ><br>
            <p>vul je wachtwoord in:</p><br>
            <input type="password" name="password" placeholder="password"><br>
            <input type="submit" value="submit" name="submit"><br>

        </form>

    </main>
    <footer>

    </footer>
<script src="js/main.js"></script>
</body>

</html>