
////////////////////////////////////////recherche.php/////////////////////////////////////////////////////////////
function typeDate() {
    document.getElementById('searchInput').setAttribute('type','date');
}

function typeSearch() {
    document.getElementById('searchInput').setAttribute('type','search');
}

////////////////////////////////////////listAtelier.php/////////////////////////////////////////////////

function switchState(i,id) {
    let btn= document.getElementsByClassName('state');
    let btnState=btn[i].getAttribute("data-state");
    if (btnState ==="0"){
        document.location.href="listAteliers.php?state=1&idState="+id;
    }else if (btnState ==="1"){
        document.location.href="listAteliers.php?state=0&idState="+id;
    }
}

function deleteMsg(idAtelier) {
    let conf=confirm("Confirmer pour supprimer l'atelier");

    if (conf===true) {
        document.location.href="listAteliers.php?id="+idAtelier;
    }
}