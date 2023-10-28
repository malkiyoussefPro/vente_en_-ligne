<?php

include 'connect_db.php';

if (isset($_POST['telecharger'])){//si je clique sur le boutton 

    $nom = $_POST['nom_produit'];
    $prix = $_POST['prix_produit'];
    $image          = $_FILES['image_produit'];
    $image_location = $_FILES['image_produit'] ['tmp_name'];
    $nom_image      = $_FILES['image_produit']['nom_produit'];
    $telecharger_nom = "img/" . $nom_image;
    /*
    - ['image_produit'] : le nom de l image
    - ['tmp_name']: l extention de limage

        if (!is_uploaded_file($image_location)) {
        echo "<script>
                alert ('Erreur lors du téléchargement de l'image.');
            </script>";
        header('location: index.php');
    }
    */

       //vérification du type de fichier

    $q_Insert = " INSERT INT produit
            ( nom_produit, prix_produit, image_produit)
            values
            ( '$nom', '$prix', '$telecharger_nom')";
            
     $result = mysqli_query($con, $q_Insert);
            if (move_uploaded_file($image_location, 'img/' . $nom_image)){
                    echo 
                    "<script>
                         alert ('image telechargée avec succes.')
                    </script>";
            }else{
                echo
                    "<script>
                         alert ('image non telechargée.')
                    </script>";
            }
            header('location: index.php');
}
?>