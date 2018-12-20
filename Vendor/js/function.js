
////////////////////////////////////////recherche.php/////////////////////////////////////////////////////////////
function typeDate() {
    document.getElementById('searchInput').setAttribute('type','date');
}

function typeSearch() {
    document.getElementById('searchInput').setAttribute('type','search');
}

////////////////////////////////////////listAtelier.php/////////////////////////////////////////////////

function etat(i,id) {
    let btn= document.getElementsByClassName('etat');
    let status=btn[i].getAttribute("data-status");;
    if (status==="0"){
        console.log(btn[i]);
        console.log(status);
        //document.location.href="listAteliers.php?etat=1&idEtat="+id;
    }else if (status==="1"){
        console.log(status);
        //document.location.href="listAteliers.php?etat=0&idEtat="+id;
    }
}

function deleteMsg(idAtelier) {
    let rep=confirm("Confirmer pour supprimer l'atelier");

    if (rep===true) {
        document.location.href="listAteliers.php?id="+idAtelier;
    }
}