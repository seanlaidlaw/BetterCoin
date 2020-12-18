/* Set the width of the side navigation to 250px and the left margin of the page content to 250px */
function openNav() {
  document.getElementById("sidebar").style.width = "250px";
  document.getElementById("content-wrap").style.marginLeft = "250px";

}

/* Set the width of the side navigation to 0 and the left margin of the page content to 0 */
function closeNav() {
  document.getElementById("sidebar").style.width = "0";
  document.getElementById("content-wrap").style.marginLeft = "0";
}


// set AJAX function to populate page with db annonce results 
function populateAnnonces(str) {
if (str.length==0) {
    document.getElementById("searchdynamique").innerHTML="";
    return;
    }
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
        document.getElementById("searchdynamique").innerHTML=this.responseText;
    }
    }
    xmlhttp.open("GET","liste_annonces.php?motcle="+str,true);
    xmlhttp.send();
}