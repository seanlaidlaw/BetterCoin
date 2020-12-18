<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BetterCoin - Annonces</title>
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
if (!empty($_SESSION['user'])) {
    echo "<h4>Vous êtes connecté en tant que: {$_SESSION['user']}</h4>";
} else {
    echo "<h4>Vous n'êtes pas actuellement connecté</h4>";
}
?>
<h1>Annonces : <?php echo $_GET["motcle"]; ?> </h1>

<?php include 'liste_annonces.php';?>

</div> <!-- annonce-list -->

<!-- footer is same every page, avoid duplicates in each page by importing same code each time -->
<?php include 'footer.html';?>

</div> <!-- content-wrap -->
</div> <!-- page-container -->
</body>
</html> 