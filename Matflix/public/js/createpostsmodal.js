const botaopublique = document.querySelector(".add");
const botaocancelar = document.querySelector(".cancc");


botaopublique.addEventListener('click',abrirmodal);
botaocancelar.addEventListener('click',fecharmodal);

function abrirmodal(){
    console.log('alo')
    let modal = document.querySelector("#main");
    modal.style.display='block';
    let pagecontainer = document.querySelector(".page-container");
    pagecontainer.style.display = 'none';

}



function fecharmodal(){
    console.log('oi')
    let modal = document.querySelector("#main");
    modal.style.display='none';
    let pagecontainer = document.querySelector(".page-container");
    pagecontainer.style.display = 'block';
}