<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BetterCoin - Accueil</title>
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

    
<h1>Index</h1>
    
</div> <!-- annonce-list -->
<?php 
if (!empty($_SESSION['user'])) {
    echo "<h4>Vous êtes connecté en tant que: {$_SESSION['user']}</h4>";
} else {
    echo "<h4>Vous n'êtes pas actuellement connecté</h4>";
}
?>



<h2> Presentation du Projet </h2>

L'objectif de ce projet est de développer un site web pour la recherche et la publication d'annonces commerciales. Notre site web s'appelle BetterCoin, une petite allusion aux plateformes existantes. 



Pour le développement de ce projet, plusieurs mises en œuvre ont été réalisées.

<h4>Squelette de l’application Web: </h4>
Dans les pages php constituant notre site, nous avons implémenté le mécanisme “include” de PHP afin d’éviter de répéter le contenu commun dans chaque page et d’éviter aussi les bugs. Par exemple, notre header.html et footer.html. Notre header.html est composé de plusieurs divisions (containers Flexbox), une pour le lien, une pour la recherche et une pour la création de compte. Nous avons également appliqué ce système pour inclure le code qui liste les annonces afin d'avoir un seul endroit à modifier en cas de changement de code, qui modifiera les résultats sur les deux pages d'annonces (un pour la recherche d'annonces classique, un pour le recherche dynamique d'annonces).



Ce mécanisme de flexbox (avec un peu d'aide des @mediaquery) nous permettra également de préserver la structure du site web, lorsque les dimensions des fenêtres changent. Dans ce cas, les divisions s'adapteront facilement aux nouvelles dimensions sans modifier la structure, mais en positionnant les divisions verticalement plutôt qu'horizontalement. Cela nous permet de contrôler le code sans avoir à chaque fois une version pour chacune des conformations, mais en modifiant uniquement le paramètre vertical ou horizontal, de que la taille de l'écran est inférieure à un paramètre X. Grâce à cela, la visualisation de notre site web est possible sur des ordinateurs, des tablettes et des téléphones portables.






Les annonces sont imbriquées les unes dans les autres afin de fournir une structure gérée par flexbox.
En cliquant sur le logo (dans le header) de notre site web, il sera toujours redirigé vers la page d'accueil.
Dans le header, nous trouvons également une section de menu, où nous aurons accès à notre compte et à la liste des annonces. Afin d'éviter que l'ouverture du menu n'ait un impact sur la structure de la page, le menu s'ouvre latéralement et déplace complètement la page en cours, de sorte que la structure des divisions est maintenue.




<h4>Style et ergonomie:</h4> 

Pour le style et l’ergonomie de notre web, nous avons décidé de créer notre propre code CSS, afin de pouvoir contrôler l'esthétique que nous voulions pour notre site. Tous les éléments sont à l'intérieur des flex, nous avons pu éviter les tableaux, et le positionnement absolu.

Affichage des données en liste: La page principale est composée uniquement de notre header et d'un message de présentation de notre site. Une fois là, dans le menu, on peut aller à la page où la liste des annonces est affichée. Par défaut toutes les annonces sont affichées mais en utilisant la barre de recherche dans le header, nous pouvons rechercher les annonces contenant un mot clé donné. 

Pour la recherche d'annonces, peu importe que les lettres soient en majuscules ou en minuscules, le code convertira tout en minuscules, de cette façon il sera indifférent à la recherche et il sera possible d'accéder à toutes les annonces basées réellement sur le mot et non sur sa forme. 

Liste dynamique, recherche:
Dans la page de recherche dynamique d'annonces, nous avons une deuxième barre de recherche qui permet de rechercher une annonce en temps réel. Le code php pour consulter la base de données et afficher les résultats reste inchangé, cependant on a ajouté du code AJAX pour exécuter du code javascript en asynchrone, et rechercher au même temps que l'on écrit. 

Ajout et suppression de données: Pour la création d'une annonce, il faut au moins le titre de l'annonce et le prix. Si certaines de ces données ne sont pas fournies, le page n'acceptera pas de créer l'annonce. Si seules ces données sont fournies, les autres champs seront laissés vides ou affichés par défaut avec le message indiquant qu'aucune information est fournie. Il existe également une image par défaut en cas d'absence d'image. Les images sont pour l'instant obtenues à partir d'un lien URL, il n'est pas possible de télécharger des fichiers. D'autre part, dans la section localisation, les coordonnées qui sont mises donnent un véritable lien vers google maps pour avoir la position exacte du rendez-vous.





<!-- footer is same every page, avoid duplicates in each page by importing same code each time -->
<?php include 'footer.html';?>

</div> <!-- content-wrap -->
</div> <!-- page-container -->
</body>
</html> 