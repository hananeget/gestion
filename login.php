
<?php require_once('conexion.php');?>
 <?php
 
             if(isset($_POST['btn'])){
                 $req="select * from logine where Nom='".$_POST['username']."' and Password='".$_POST['password']."'"; 
                if($result=mysqli_query($link,$req))
                {
                   $log = mysqli_fetch_assoc($result);
                   if($log){
        
                       header("location:index.php");    
                    }
                    } else{
                        echo "no valid";
                    } 
                }       
        
             
             ?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="style.css"> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
    <div id="login">
        <h3 class="text-center text-white pt-5">Login </h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="" method="post">
                            <h3 class="text-center text-info">Login</h3>
                            <div class="form-group">
                                <label for="username" class="text-info">Nom</label><br>
                                <input type="text" name="username" id="username"placeholder="entrer votre nom" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="text" name="password" id="password" placeholder="entrer votre mots de pass" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="login">
                            </div>
                           
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>