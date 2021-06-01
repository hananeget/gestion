
<?php require_once('conexion.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css"> 
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-dark  bg-primary">
  <!-- <div class="container-fluid"> -->
  <h1 class="text-light">stock produits</h1>   
    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav ml-5 ">
        <li class="nav-item active h3">
          <a class="nav-link active" href="index.php">les catégories
           
          </a>
        </li>
        
        <li class="nav-item h3">
          <a class="nav-link" href="ajouter.php">ajouter produits</a>
        </li>
        
        <li class="nav-item h3">
          <a class="nav-link" href="login.php">contact</a>
        </li>
      </ul>
      
    </div>
  </div>
</nav>
<div class="row"> 
    <?php

$result=mysqli_query($link,"SELECT distinct `Categories` FROM `stockk`");
while ( $row = mysqli_fetch_assoc($result)):
?>

      
    <div class="col-md-4 data align-items-stretch mb-5 mb-lg-5">
      <div class="card card-block">
      <h4 class="title"><a href="table.php?réf=<?php echo $row['Categories']?>"><?php echo $row['Categories']?></a></h4>  
        <img src="stock.image.jpg" alt="Photo of sunset">
      
        <p class="card-text">les catégories de stock.</p> 
  </div>
    </div>
 
    


<?php endwhile; ?>
  
</div>












</body>
</html>
