<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>BetterCoin - Accueil</title>
        <link rel="stylesheet" href="style.css">
        <meta name="description" content="Like The Silk Road, but boring">
    </head>
    <body>
            <?php require_once("GererAnnonces.php"); ?>
            <?php require_once("bdd.php"); ?>
<div id="page-container">
<div id="content-wrap">
    
<header class="flex-container">
    <div>
        <a href="#default" class="name" style="font-weight: bold;">BetterCoin</a>
    </div>

    <div class="search-container" method='get'>
        <form action="index.php">
            <input id="searchbar" type="text" name="motcle" placeholder="Rechercher..">
            <input type="submit" value="Rechercher">
        </form>
    </div>
    
    <div id="login">
        <form action="/connecter.php" method="get">
            <input type="text" id="fname" name="pseudonyme" placeholder="Pseudo">
            <input type="text" id="lname" name="motdepasse" placeholder="Mot de Passe">
            <input type="submit" value="Connecter">
        </form> 
    </div>

</header>
      



<div class="annonce-list">
<h1>Annonces: <?php echo $_GET["motcle"]; ?> </h1>

<?php
$db = new SQLite3('annonces.db');
$res = $db->query('SELECT * FROM annonces');

while ($row = $res->fetchArray()) {
    echo '<div class="annonce">';
    echo "  <h4 style='margin: 0;'>{$row['titre']} <span id='category'>[{$row['categorie']}]</span></h4>";
    echo "  <div id=annonce-prix>{$row['prix']} €</div>";
    echo "  <span>{$row['description']}</span>";
    echo '</div>';
}
?>
</div> <!-- annonce-list -->

<footer id="footer">
    <p>Copyright 2020</p>
    <p> Sean Laidlaw & Claudia Restrepo-Ortiz</p>
    <p>Université de Montpellier</p>
</footer>

</div> <!-- content-wrap -->
</div> <!-- page-container -->
</body>
</html> 
