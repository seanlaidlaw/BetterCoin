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
<div id="page-container">
<div id="content-wrap">
      
<!-- header is same every page, avoid duplicates in each page by importing same code each time -->
<?php include 'header.html';?>


<div class="annonce-list">
<h1>Annonces: <?php echo $_GET["motcle"]; ?> </h1>

<?php
$db = new SQLite3('annonces.db');
//  construire requete SQL pour rechercher mot dans titre ou dans description
$sqlQueryStr = "SELECT * FROM annonces WHERE lower(titre) LIKE lower('%{$_GET[motcle]}%') OR lower(description) LIKE lower('%{$_GET[motcle]}%')";
// echo $sqlQueryStr; // debug SQL query
$res = $db->query($sqlQueryStr);

while ($row = $res->fetchArray()) {
    echo '<div class="annonce">';
    echo "  <h4 style='margin: 0;'>{$row['titre']} <span id='category'>[{$row['categorie']}]</span></h4>";
    echo "  <div id=annonce-prix>{$row['prix']} €</div>";
    echo "  <span>{$row['description']}</span>";
    echo '</div>';
}
?>
</div> <!-- annonce-list -->

<!-- footer is same every page, avoid duplicates in each page by importing same code each time -->
<?php include 'footer.html';?>

</div> <!-- content-wrap -->
</div> <!-- page-container -->
</body>
</html> 