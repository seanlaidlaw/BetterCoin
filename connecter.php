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
// $queteSQLInsertion = "INSERT INTO users (username, password) VALUES (\"{$_GET['pseudonyme']}\",\"{$_GET['motdepasse']}\");";
$sqlQueryStr = "SELECT COUNT(*) as count FROM users WHERE (username=\"{$_GET['pseudonyme']}\" AND password=\"{$_GET['motdepasse']}\");";
$rescount = $db->query($sqlQueryStr);
$rowcount = $rescount->fetchArray() ;
$numRows = $rowcount['count'];

$sqlQueryStr = "SELECT * FROM users WHERE username=\"{$_GET['pseudonyme']}\" AND password=\"{$_GET['motdepasse']}\";";
$res = $db->query($sqlQueryStr);
$row = $res->fetchArray() ;

if ($numRows == 0) {
    echo "<h2>Aucun utilisateur trouvé ce mot de passe et pseudonyme.</h2>";
} else {
    echo "<h2>Bonjour {$row['username']}</h2>";
    $_SESSION["user"] = "{$row['username']}";
}

?>


<a href="annonces.php">Cliquez ici</a> pour revenir à la page d'annonces. 




</div> <!-- annonce-list -->

<!-- footer is same every page, avoid duplicates in each page by importing same code each time -->
<?php include 'footer.html';?>

</div> <!-- content-wrap -->
</div> <!-- page-container -->
</body>
</html> 