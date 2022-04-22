<header>
    <?php 
    session_start();
    // var_dump($_SESSION);
    ?>
    <a href="index.php">homepage</a>
    <a href="bestel.php">menukaart</a>
    <a href="login.php">loginpage</a>
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