function etat(i) {
    let etat=0;
    let status=document.getAttribute("data-status");
    console.log(status);
    let btn= document.getElementsByClassName('etat');
    if (etat===0){
        btn[i].className="btn btn-danger etat";
        btn[i].textContent="Stop";

    }else if (etat===1){
        btn[i].className="btn btn-success etat";
        btn[i].textContent="OK";
    }
}