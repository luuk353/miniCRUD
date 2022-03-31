<?php
// $host ='localhost';
// $db ='menukaart';
// $user ='root';
// $pass ='password';
// $charset ="utf8mb4";

// $dsn ="mysql:host=$host;dbname=$db;charset=$charset";
// $opt =[
//     PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
//     PDO::ATRR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
//     PDO::ATRR_EMULATE_PREPARES => false,
// ];

// try
// {
//     $connect = new PDO($dsn, $user, $pass, $opt);
//     echo "verbinding is gemaakt.";
// }
// catch (PDOExpection $e)
// {
//     echo $e->getMessage ();
//     die("sorry, Database probleem");
// }
$host="localhost";
$db = "menukaart";
$user = "root";
$pass = "password";
$charset = "utf8mb4";

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$opt =[
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATRR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATRR_EMULATE_PREPARES => false,
];

try
{
    $connect = new PDO($dsn, $user, $pass, $opt);
    echo "verbinding is gemaakt";
}
catch (PDOExpection $e)
{
    echo $e->getMessage ();
    die ("sorry, Database Probleem.");
}
?>
