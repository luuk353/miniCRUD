<?php 
     include_once("includes/connect.php");

    // $sql = "SELECT * FROM menukaart";
    // $stmt = $connect -> prepare($sql);
    // $stmt ->execute();
    // $result = $stmt -> fetchAll();
   
    if(isset($_GET["search"])){
        $search = "%".$_GET['search']."%";

            $sql = "SELECT * FROM menukaart WHERE titel LIKE :search"; 
            $stmt = $connect -> prepare($sql);
            $stmt -> bindParam(":search", $search);
        }  
        else {
        $sql = "SELECT * FROM menukaart";
        $stmt = $connect -> prepare($sql);
    }
        
    $stmt -> execute();
    $result = $stmt -> fetchAll();

    foreach($result as $res) {
?> 
<li>
    <div class="itemblok">
        <p><?php echo $res['titel']; ?></p>
        <p><?php echo $res['prijs']; ?></p>
        <p><?php echo $res['beschrijving']; ?></p>
    </div>
</li>
    <?php 
    }
?>