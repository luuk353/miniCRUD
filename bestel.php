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
    <?php include_once ("includes/header.php");
    
    // if(isset($_GET["search"])){
    //     $search = "%".$_GET['search']."%";

    //         $sql = "SELECT * FROM menukaart WHERE titel LIKE :search"; 
    //         $stmt = $connect -> prepare($sql);
    //         $stmt -> bindParam(":search", $search);
    //     }  
    //     else {
    //     $sql = "SELECT * FROM menukaart";
    //     $stmt = $connect -> prepare($sql);
    // }
        
    // $stmt -> execute();
    // $result = $stmt -> fetchAll();
    ?>
    <main id="main-bestel">
        <form class="search" action="" method="get">
            <input type="text" name="search" placeholder="Zoek iets?">
            <button name="zoek" type="submit">Zoeken</button>
        </form>

        <ul>
            <?php include ("php/readitems.php")?>
        </ul>
    </main>
    <footer>

    </footer>
    <!-- <script src="js/search.js"></script> -->
</body>

</html>