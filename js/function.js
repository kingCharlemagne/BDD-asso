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


function typeDate() {
    document.getElementById('searchInput').setAttribute('type','date');
}

function typeSearch() {
    document.getElementById('searchInput').setAttribute('type','search');
}