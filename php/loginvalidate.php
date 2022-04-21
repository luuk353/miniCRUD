<?php
session_start();
    include_once("../includes/connect.php");

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $sql = "SELECT * FROM users WHERE username = :username";
        $stmt = $connect -> prepare($sql);
        $stmt -> bindParam(":username", $_POST["username"]);
        $stmt -> execute();
        $result = $stmt -> fetchAll();

        foreach($result as $res)  { 
            if($_POST["password"] == $res["password"]) {
                $_SESSION["userinfo"] = 'admin';
                break;
            }
        }
    }
    // var_dump($_SESSION);

    header("Location: ../index.php")
    ?>