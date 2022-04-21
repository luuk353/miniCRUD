<header>
    <?php 
    session_start();
    // var_dump($_SESSION);
    ?>
    <a href="index.php">index page</a>
    <a href="bestel.php">bestellijst</a>
    <a href="login.php">log in</a>
    <!-- <div class="image" onclick="location.href='winkelmand.php';" style="cursor: pointer;">
    </div> -->

    <?php
    include("includes/connect.php");
        
    if(isset($_SESSION["userinfo"])) {
        if($_SESSION["userinfo"] == "admin") { 
            echo '<a href="admin.php">admin</a>';
        }
    }
    ?>
</header>