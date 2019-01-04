
////////////////////////////////////////recherche.php/////////////////////////////////////////////////////////////
function typeDate() {
    document.getElementById('searchInput').setAttribute('type','date');
}

function typeSearch() {
    document.getElementById('searchInput').setAttribute('type','search');
}

////////////////////////////////////////listAtelier.php/////////////////////////////////////////////////

function switchState(i,id,state) {
    if (state === 0){
        document.location.href="listAteliers.php?state=1&idState="+id;
    }else if (state === 1){
        document.location.href="listAteliers.php?state=0&idState="+id;
    }
}

function deleteMsg(idAtelier) {
    let conf=confirm("Confirmer pour supprimer l'atelier");

    if (conf===true) {
        document.location.href="listAteliers.php?id="+idAtelier;
    }
}

/////////////////////////////////////InscriptionCours///////////////////////////////////////////////////////////

let blockAlpha = document.getElementById('lessonAlpha');
let blockInt = document.getElementById('lessonIntermediaire');
let blockDeb = document.getElementById('lessonDebutant');
let blockPayment = document.getElementById('payment');


blockAlpha.style.display = "none";
blockInt.style.display = "none";
blockDeb.style.display = "none";
blockPayment.style.display = "none";


function selectLevel(id) {
    if (id === 1) {
        blockAlpha.style.display = "block";
        blockPayment.style.display = "block";
        blockInt.style.display = "none";
        blockDeb.style.display = "none";
    } else if (id === 2) {
        blockInt.style.display = "block";
        blockPayment.style.display = "block";
        blockAlpha.style.display = "none";
        blockDeb.style.display = "none";
    } else if (id === 3) {
        blockDeb.style.display = "block";
        blockPayment.style.display = "block";
        blockAlpha.style.display = "none";
        blockInt.style.display = "none";
    }
}