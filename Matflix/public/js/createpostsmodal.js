const botaopublique = document.querySelector(".botaopublique");
const botaocancelar = document.querySelector(".botaocancelar");


botaopublique.addEventListener('click',abrirmodal);
botaocancelar.addEventListener('click',fecharmodal);

function abrirmodal(){
    let modal = document.querySelector("#main");
    modal.style.display='block';
    let sidebar = document.querySelector(".sidebar");
    sidebar.style.display = 'none';

}



function fecharmodal(){
    let modal = document.querySelector("#main");
    modal.style.display='none';
    let sidebar = document.querySelector(".sidebar");
    sidebar.style.display = 'block';
}