<?php require_once('conexion.php');?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ajouter les produits</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
   
</head>

<body>

    <form action="" method="POST">
        <div class="container register">

            <div class="row">
                <div class="col-md-3 register-left">
                    
                    <h3>ajouter des produits de stocks</h3>
                    <p></p>
                    
                </div>
                <div class="col-md-9 register-right">
                    <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                        <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="index.php" role="tab" aria-controls="home" aria-selected="true">Catégories</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="login.php" role="tab" aria-controls="profile" aria-selected="true">contact</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <h3 class="register-heading text-primary">ajouter</h3>
                            <div class="row register-form">
                                <div class="col-md-6">
                               
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="NOM" placeholder="entrer le nom de produit " />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="prix" placeholder="entrer le prix de produit " />
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="qteM" placeholder="entrer la quantité minimale" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="qteMax" placeholder="entrer la quantité maximale " />
                                    </div>

                                    <div class="form-group">
                                        <input type="text" class="form-control" name="cate" placeholder="entrer le nom de catégories" />
                                    </div>

                                </div>
                                <div class="form-group col-md-6">
                                    <input type="submit" name="btnajouter" value="Ajouter" class="btnajouter">

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <?php
           
            if (isset($_POST['btnajouter'])) {
                $nom = $_POST['NOM'];
                $prix = $_POST['prix'];
                $min = $_POST['qteM'];
                $max = $_POST['qteMax'];
                $ctg = $_POST['cate'];


                $reqAdd = "INSERT INTO stockk(`Nom`, `Prix`, `Qte_min`, `Qte_Max`, `Categories`) 
                    VALUES ('$nom','$prix','$min','$max','$ctg')";

                $resultat = mysqli_query($link, $reqAdd);
                if ($resultat) {
                    echo "Insertion des données validés";
                } else {
                    echo "Echec d Insertion des données";
                }
            }
            ?>

        </div>
    </form>

</body>

</html>