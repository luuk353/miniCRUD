<<?php 
     include_once("includes/connect.php");

    $sql = "SELECT * FROM menukaart";
    $stmt = $connect -> prepare($sql);
    $stmt ->execute();
    $result = $stmt -> fetchAll();

    foreach($result as $res) {
?>

<div class="itemblok">
    <p><?php echo $res['titel']; ?></p>
    <p><?php echo $res['prijs']; ?></p>
    <p><?php echo $res['beschrijving']; ?></p>
</div>

<?php 
    }
?>