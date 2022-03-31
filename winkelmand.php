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
        <div class="image" onclick="location.href='winkelmand.php';" style="cursor: pointer;">
        </div>
        <?php
// include("connect.php");
?>

    </header>
    <main id = "winkelmandmain">
        <div class="papa-winkelmand">
            <div class="winkelmand">
                <h1>Uw winkelmand</h1>
                <p> hier zit u uw winkelmandje</p>
            </div>
            
        </div>
        <div class="mandspullen">
                <h1>Uw winkelmand</h1>
                <div class="mand1">
                    <p> pizza man</p>
                </div>
                <div class="mand2">
                    <p> pizza man</p>
                </div>
                <div class="mand2">
                    <p> pizza man</p>
                </div>
                <div class="mand3">
                    <p> pizza man</p>
                </div>
        </div>
        
    </main>
    <footer>

    </footer>
</body>

</html>