<?php require_once('conexion.php'); ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>modifier les produits</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <form action="" method="POST">
        <div class="container register">
            <?php
            $modéfier = $_GET['mod'];

            if ($modéfier) {
                $requp = "SELECT * FROM `stockk`where ref=' $modéfier' ";
            }

            $result = mysqli_query($link, $requp);
            $row = mysqli_fetch_assoc($result);

            ?>







            <div class="row">
                <div class="col-md-3 register-left">

                    
                    <h3>modifier les produits de stock</h3>
                    

                </div>
                <div class="col-md-9 register-right">
                    <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="index.php" role="tab" aria-controls="profile" aria-selected="true">Catégories</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="ajouter.php" role="tab" aria-controls="profile" aria-selected="true">Ajouter</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <h3 class="register-heading text-primary">mettre à jour</h3>
                            <div class="row register-form">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Nom</label>
                                        <input type="text" class="form-control" name="NOM" value="<?php echo $row['Nom'] ?>" />
                                    </div>
                                    <div class="form-group">
                                        <label>Prix</label>
                                        <input type="text" class="form-control" name="prix" value="<?php echo $row['Prix'] ?>" />
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Qté_min</label>
                                        <input type="text" class="form-control" name="qteM" value="<?php echo $row['Qte_min'] ?>" />
                                    </div>
                                    <div class="form-group">
                                        <label>Qté_MAX</label>
                                        <input type="text" class="form-control" name="qteMax" value="<?php echo $row['Qte_Max'] ?>" />
                                    </div>

                                    <div class="form-group">
                                        <label>catégories</label>
                                        <input type="text" class="form-control" name="cate" value="<?php echo $row['Categories'] ?>" />
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <button class="btnajouter " name="modifier">modifier</button>

                                </div>


                            </div>

                        </div>
                    </div>
                </div>
            </div>


        </div>
    </form>
    <?php
    if (isset($_POST['modifier'])) {
        $nom = $_POST['NOM'];
        $prix = $_POST['prix'];
        $min = $_POST['qteM'];
        $max = $_POST['qteMax'];
        $ctg = $_POST['cate'];


        $reqAdd = "update stockk set `Nom`='$nom', `Prix`='$prix', `Qte_min`='$min', `Qte_Max`='$max', `Categories`='$ctg'
        where ref=' $modéfier'";

        $resultat = mysqli_query($link, $reqAdd);
        if ($resultat) {
            header("location:index.php");
        } else {
            echo "Echec d Insertion des données";
        }
    }






    ?>


</body>

</html>