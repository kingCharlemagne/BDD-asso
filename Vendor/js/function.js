
////////////////////////////////////////recherche.php/////////////////////////////////////////////////////////////
function typeDate() {
    document.getElementById('searchInput').setAttribute('type','date');
}

function typeSearch() {
    document.getElementById('searchInput').setAttribute('type','search');
}

////////////////////////////////////////listAtelier.php/////////////////////////////////////////////////

function deleteMsg(idArticle) {
    let rep=confirm("Confirmer pour supprimer l'atelier");

    if (rep===true) {
        document.location.href="listAteliers.php?id="+idArticle;
    }
}