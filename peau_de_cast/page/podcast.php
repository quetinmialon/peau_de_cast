<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/cssmaison.css">
    <title>Podcast</title>
</head>
<body>
<?php include("tableau.php")?>

<?php
if (array_key_exists($_GET["id"], $podcast)) {// condition verifiant si l'index est présent dans le tableau $podcast
    ?>
    
    <div class="conteneur">           
        <div class = "header">
        <!-- utilisation du $_GET pour récupérer une valeur dans l'adresse URL de la page 
        permet ici de créer "plusieurs pages http" avec un seul fichier php -->
            <div ><a href="../page/index.php"><img  src="../image/fleche-carre-gauche.svg" alt="retour"></a></div>
            <h2><?= $podcast[$_GET["id"]]["name"] ?></h2>
            <div class="date"><?= $podcast[$_GET["id"]]["date"] ?></div>
        </div>
        <div class="texte"><?=  $podcast[$_GET["id"]]["text"] ?></div>
        <audio class="audio" controls src="<?= $podcast[$_GET["id"]]["audio"] ?>"></audio>
        <!-- ouverture d'une balise script pour ajouter dynamiquement des fonds d'écran changeant en condition de l'url-->
        <style>
        html{
            background-image: url(<?= $podcast[$_GET["id"]]["url"] ?>);
            background-repeat: no-repeat;
            background-size: 100%;
        }
        @media (max-width: 1080px){
            html{
                background-image: none;
                background-color: RGB(0, 105, 29);
            }
        }   
        </style>
    </div>
    <div class="comments">
        
        <?php foreach($podcast[$_GET["id"]]["comments"] as $k) {
    ?>
            <div class = "divCommentaire">
                <div class="user"> <?= $k["user"]?> </div>
                <div class="commentaire"><?= $k["commentaire"]?></div>
            </div>



    <?php    } ?>
    </div>
    <?php
}else{
?> 
    <div class="conteneurErreur">
        <div class="erreur">error 404:  Not Found</div>
        <div class="erreur2">cette page n'existe pas</div>
        <img src="../image/250.png" alt="twitch qui louche"> 
    </div>

    <?php
}
?>

</body>
</html>