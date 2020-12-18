<?php
$db = new SQLite3('annonces.db');
//  construire requete SQL pour rechercher mot dans titre ou dans description
$sqlQueryStr = "SELECT * FROM annonces WHERE lower(titre) LIKE lower('%{$_GET[motcle]}%') OR lower(description) LIKE lower('%{$_GET[motcle]}%')";
// echo $sqlQueryStr; // debug SQL query
$res = $db->query($sqlQueryStr);

while ($row = $res->fetchArray()) {
    echo '<div class="annonce">';
    echo "  <div class='annonce-title-description-pseudo'>";
    echo "    <div class='annonce-title'>";
    echo "       <h4 style='margin: 0;'>{$row['titre']} <span id='category'>[{$row['categorie']}]</span></h4>";
    echo "       <div class='annonce-description'>{$row['description']}</div>";
    echo "    </div>";
    echo "    <div class='annonce-pseudo'>{$row['pseudo']} — {$row['date']}</div>";
    echo "  </div>";
    echo "  <div class='annonce-img-prix-coord'>";
    echo "    <div class='annonce-img-prix'>";
    echo "      <div class=annonce-prix><p>{$row['prix']} €</p></div>";
    echo "      <div class='annonce-img'><img style='max-height:160px;max-width:200px;' src={$row['photo']}></div>";
    echo "    </div>";

if(empty($row['rdv_lon'])){
    echo "    <div class='annonce-coord'><p style='font-style: italic;'>No Location Data Provided</p></div>";
} else {
    echo "    <div class='annonce-coord'><a target=\"_blank\" href=\"http://maps.google.com/maps?q={$row['rdv_lat']},{$row['rdv_lon']}\">Localise (Google Maps)</a></div>";
}
    echo "  </div>";
    echo '</div>';
}
?>
