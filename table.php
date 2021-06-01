<?php require_once('conexion.php'); ?>
<?php
$ref = $_GET['réf'];
if ($ref) {
  $REQ = "SELECT * FROM `stockk`where Categories='$ref'";
}

$result = mysqli_query($link, $REQ);


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">

  <title>table de produits</title>
</head>

<body>
  
<nav class="navbar navbar-expand-lg navbar-dark  bg-primary">
  <!-- <div class="container-fluid"> -->
  <h2 class="text-info ">TangerMarket</h2>   
    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav ml-5 ">
        <li class="nav-item active h5">
          <a class="nav-link active" href="index.php">les catégories
           
          </a>
        </li>
        
        <li class="nav-item h5">
          <a class="nav-link" href="ajouter.php">ajouter produits</a>
        </li>
        
        <li class="nav-item h5">
          <a class="nav-link" href="login.php">contact</a>
        </li>
      </ul>
      
    </div>
  </div>
</nav>

  <h3 class="text-center text-white pt-5">Stocks des produits </h3><br><br><br>

  <table class="table bg-light  table-hover">
    <thead class="thead-light">
      <tr>
        <th>référence</th>
        <th>Nom</th>
        <th>Prix</th>
        <th>Qté Min</th>
        <th>QtéMax</th>
        <th>Catégories</th>
        <th>Modifier</th>
        <th>Suprimer</th>

      </tr>
    </thead>
    <tbody>
      <?php
      while ($row = mysqli_fetch_assoc($result)) {
      ?>
        <tr>
          <td><?php echo $row['ref'] ?></td>
          <td><?php echo $row['Nom'] ?></td>
          <td><?php echo $row['Prix'] ?></td>
          <td><?php echo $row['Qte_min'] ?></td>
          <td><?php echo $row['Qte_Max'] ?></td>
          <td><?php echo $row['Categories'] ?></td>
          <td> <a href="modifier.php?mod=<?php echo  $row['ref'] ?>"> <i class="fas fa-edit"></i></a> </td>
          <td> <a href="suprimer.php?sup=<?php echo  $row['ref'] ?>"><i class="fal fa-trash-alt"></i></a> </td>

        </tr>
      <?php } ?>
    </tbody>
  </table>


</body>

</html>