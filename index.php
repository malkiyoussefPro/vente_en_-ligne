<?php

echo 'Youssef';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vente en ligne</title>
</head>
<body>
    <center>
        <div class="main">
            <form action="insert.php" method="POST">
                <h2>Site web Vente en ligne</h2>
                <img src="./images/logo.jpeg" alt="logo" width="450px">
                //on utilise name pour l'utiliser en php
                <div>
                  <input type="text" name = 'name' >  
                </div>

               <div>
               <input type="text" name = 'prix' >  
               </div> 
               <div>
                <input type="file" id="file" name="image"
                style="">
                <label for="file">Telecharger l'image</label>
               </div>
               

            </form>
        </div>
    </center>
    
</body>
</html>