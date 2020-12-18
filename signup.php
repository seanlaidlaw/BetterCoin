<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BetterCoin - Connexion</title>
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



<div class="annonce-list">
<?php
$db = new SQLite3('annonces.db');

// $sqlQueryStr = "SELECT motdepasse FROM users WHERE motdepasse=".$_GET['motdepasse'];
$queteSQLInsertion = "INSERT INTO users (username, password) VALUES (\"{$_GET['pseudonyme']}\",\"{$_GET['motdepasse']}\");";

$statement = $db->prepare($queteSQLInsertion);
$statement->execute();
//  construire requete SQL pour rechercher mot dans titre ou dans description


$idoflastinsert = $db->lastInsertRowID();
echo "<h1>Compté Crée</h1><p>Votre compte (id: ".$idoflastinsert.") a été ajouté avec les pseudo :".$_GET['pseudonyme']."<p>";
?>

<a href="annonces.php">Cliquez ici</a> pour revenir à la page d'annonces. 




</div> <!-- annonce-list -->

<!-- footer is same every page, avoid duplicates in each page by importing same code each time -->
<?php include 'footer.html';?>

</div> <!-- content-wrap -->
</div> <!-- page-container -->
</body>
</html> 