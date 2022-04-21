<header>
    <?php session_start(); ?>
    <a href="index.php">index page</a>
    <a href="bestel.php">bestellijst</a>
    <a href="login.php">log in</a>
    <div class="image" onclick="location.href='winkelmand.php';" style="cursor: pointer;">
    </div>

    <?php
    include("includes/connect.php");
        
    if(isset($_SESSION["userinfo"])) {
        if($_SESSION["userinfo"]["admin"] == 1) { 
            echo '<a href="../admin.php">admin</a>';
        }
    }
    ?>
</header>