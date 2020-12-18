<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BetterCoin - Creer une annonce</title>
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript" src="bettercoin.js"></script>
    <meta name="description" content="Like The Silk Road, but boring">
</head>
<body>
<div id="page-container">
<div id="content-wrap">
    
<!-- header is same every page, avoid duplicates in each page by importing same code each time -->
<?php include 'header.html';?>

<!-- menu sidebar is same every page, avoid duplicates in each page by importing same code each time -->
<?php include 'sidebar.html';?>




<!-- ajouter l'annonce et dire à l'utilisateur qu'il a été ajouté -->
<?php
// TODO: when add user authentication, replace this with call to user database
$_GET['pseudo']="mypseudo";

// replace empty variables with placeholder values to not cause SQL errors
if(empty($_GET['description'])){ $_GET['description']="description de l'annonce pas fourni";}
if(empty($_GET['categorie'])){ $_GET['categorie']="sans-categorie";}
if(empty($_GET['photo_url'])){ $_GET['photo_url']="https://image.shutterstock.com/image-vector/silhouette-people-unknown-male-person-260nw-1372192277.jpg";} # photo pour monter qu'il y a pas de photo

$db = new SQLite3('annonces.db');

$queteSQLInsertion = "INSERT INTO annonces (titre, description, categorie, pseudo, prix, photo, rdv_lat, rdv_lon) VALUES (\"{$_GET['titre']}\",\"{$_GET['description']}\",\"{$_GET['categorie']}\", \"{$_GET['pseudo']}\", \"{$_GET['prix']}\", \"{$_GET['photo_url']}\", \"{$_GET['rdv_lat']}\", \"{$_GET['rdv_lon']}\");";

$statement = $db->prepare($queteSQLInsertion);
$statement->execute();

$idoflastinsert = $db->lastInsertRowID();
echo "<h1>Annonce Ajouté</h1><h2>Succes!</h2><p>Votre annonce a été ajouté avec l'identifiant : $idoflastinsert<p>";
?>

</div> <!-- annonce-list -->


<!-- footer is same every page, avoid duplicates in each page by importing same code each time -->
<?php include 'footer.html';?>

</div> <!-- content-wrap -->
</div> <!-- page-container -->
</body>
</html> 