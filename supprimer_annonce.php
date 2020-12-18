<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BetterCoin - Suppression d'Annonce</title>
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
//  construire requete SQL pour rechercher mot dans titre ou dans description
$sqlQueryStr = "DELETE FROM annonces WHERE id=".$_GET['id'];
// echo $sqlQueryStr; // debug SQL query
$res = $db->query($sqlQueryStr);
?>


<h1> Annonce n°<?php echo $_GET['id']; ?> a été supprimé</h1>

<a href="annonces.php">Cliquez ici</a> pour revenir à la page d'annonces. 




</div> <!-- annonce-list -->

<!-- footer is same every page, avoid duplicates in each page by importing same code each time -->
<?php include 'footer.html';?>

</div> <!-- content-wrap -->
</div> <!-- page-container -->
</body>
</html> 