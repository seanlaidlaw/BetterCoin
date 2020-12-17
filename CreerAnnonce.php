<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BetterCoin - Creer une annonce</title>
    <link rel="stylesheet" href="style.css">
    <meta name="description" content="Like The Silk Road, but boring">
</head>
<body>
<div id="page-container">
<div id="content-wrap">
    
<!-- header is same every page, avoid duplicates in each page by importing same code each time -->
<?php include 'header.html';?>

<!-- menu sidebar is same every page, avoid duplicates in each page by importing same code each time -->
<?php include 'sidebar.html';?>




<div class="annonce-list">
<h1>Créer une nouvelle annonce</h1>
<div class="form-container">
    <form action="/postAjoutAnnonce.php" method="get">
        <label for="titre">Titre de l'annonce</label><br>
        <input type="text" name="titre" placeholder="Âme de Faust à vendre, pas cher" autofocus required><br><br>
        <label for="description">Description de l'annonce</label><br>
        <input type="text" name="description" placeholder="vends mon âme car envie de me liberer d'insatisfaction de la vie"><br><br>
        <label for="categorie">Categorie de l'annonce</label><br>
        <input type="text" name="categorie" placeholder="Surnaturel"><br><br>
        <label for="prix">Prix</label><br>
        <input type="number" name="prix" placeholder="1000" required><br><br>
        <label for="rdv_lat">Latitude GPS du rendez-vous</label><br>
        <input type="text" name="rdv_lat" placeholder="51°20′25″N"><br><br>
        <label for="rdv_lon">Longitude GPS du rendez-vous</label><br>
        <input type="text" name="rdv_lon" placeholder="12°22′29″E"><br><br>
        <label for="photo_url">Photo de l'annonce (URL vers un image)</label><br>
        <input type="text" name="photo_url" placeholder="https://upload.wikimedia.org/wikipedia/commons/thumb/4/4f/Sergei_Prokudin-Gorskii_-_Feodor_Chaliapin_as_Mephisto.jpg/340px-Sergei_Prokudin-Gorskii_-_Feodor_Chaliapin_as_Mephisto.jpg"><br><br>
        <input type="submit" class="button button-alt" value="Creer Annonce">
    </form> 
</div>

</div> <!-- annonce-list -->


<!-- footer is same every page, avoid duplicates in each page by importing same code each time -->
<?php include 'footer.html';?>

</div> <!-- content-wrap -->
</div> <!-- page-container -->
</body>
</html> 