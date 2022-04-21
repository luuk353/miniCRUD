<!DOCTYPE html>
<html lang="en">
<?php 
include_once ("includes/connect.php ");
/**
 * @var PDO $connect
 */
?>
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
    
    <?php include ("php/readitems.php")?>

</main>
    <footer>

    </footer>
</body>

</html>