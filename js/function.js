//finir la gestion du btn pbm de sélèction du btn
function etat(i) {
    let btn= document.getElementsByClassName('etat');
    let status=btn[i].getAttribute("data-status");
    if (status==="0"){
        console.log();
        btn[i].className="btn btn-danger etat";
        console.log(3);
        btn[i].textContent="Stop";
        btn[i].setAttribute("data-status","1");
        console.log(i);

    }else if (status==="1"){
        btn[i].className="btn btn-success etat";
        btn[i].textContent="OK";
        btn[i].setAttribute("data-status","0")
    }
}

function selectLevel() {
    let level=document.getElementById('level').value;
    let blockAlpha=document.getElementById('lessonAlpha');
    let blockInt=document.getElementById('lessonIntermediaire');
    let blockDeb=document.getElementById('lessonDebutant');

    blockAlpha.style.display="none";
    blockInt.style.display="none";
    blockDeb.style.display="none";

    if (level==='1') {
        blockAlpha.style.display="block";
    }else if (level==='2'){
        blockInt.style.display="block";
    }else if (level==='3'){
        blockDeb.style.display="block";
    }
    console.log(level);
}