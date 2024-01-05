<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/cssmaison.css">
    <title>Podcast</title>
</head>
<body>
<h1>Podcast</h1>
    <div class="pageweb">
    
    
    <?php include("tableau.php"); // import du tableau simulant la BDD
      foreach ($podcast as $i): ?> <!-- boucle foreach itérant dans le tableau pour créer dynamiquement le nombre voulu de div -->
        <div class="conteneur">           
            <div class="date"><?= $i["date"] ?></div> 
            <!-- utilisation de la technique ?= pour raccourcir le ?php echo ()
            puis on recupère l'information dans le tableau $podcast ou chaque case est appelé $i dans la boucle-->
            <h2><a href ="../page/podcast.php?id=<?=$i["id"]?>" ><?= $i["name"] ?></a></h2> 
            <div class="texte"><?= $i["text"] ?></div>
            <audio class="audio" controls src="<?= $i["audio"] ?>"></audio>
        </div>
    <?php endforeach; ?>
</div>
</body>
</html>
