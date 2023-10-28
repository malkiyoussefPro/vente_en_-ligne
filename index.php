

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Vente en ligne</title>
</head>
<body>
   <?php

        include 'connect_db.php';
    
    ?>

    <center>
        <div class="main">
            <form action="insert.php" method="POST" enctype="multipart/form-data">
                <h2>Site web Vente en ligne</h2>
                <img src="./images/logo.jpeg" alt="logo" width="380px">
                
                <div>
                  <input type = "text" name = "nom_produit" >  
                </div>

               <div>
               <input type = "text" name = "prix_produit" >  
               </div> 
               <div>
                <input type = "file" id = "file" name ='image_produit'
                style="display: none;">
                <label for="file">Choisir l'image du produit</label>
               
                <button name = " telecharger "> Telecharger le produit</button>
               </div>
               <div>
                <a href="prduit.php">Lister les produit</a>
               </div>
               <div>
                <p>
                    <span>Youssef</span> vous donne la bienvenue sur le site web <span>www.yosma.com</span>
                </p>
               </div>
               

            </form>
        </div>
    </center>
    
</body>
</html>