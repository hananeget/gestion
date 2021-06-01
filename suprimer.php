<?php require_once('conexion.php');?>

<?php
if(isset($_GET['sup'])){
    $ref=$_GET['sup'];
    if($ref)
    {
        $reqsup = "DELETE FROM `stockk` WHERE ref='$ref'";
        $resultat = mysqli_query($link, $reqsup);
        if ( $resultat==true) {
            header("location:ajouter.php");
          } else {
            echo "Error deleting record: " ;
          }
       
    }
}
?>
