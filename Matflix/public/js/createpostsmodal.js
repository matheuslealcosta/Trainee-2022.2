const fadeModal = document.getElementById("fadeModal");
const botaoAbrir = document.getElementsByClassName("botao");
const botaoFechar = document.getElementById("Cancel");

const botoesModal = [...botaoAbrir].filter((el) =>{
    return el.dataset.modal != null
});
const modalCurrent= () => {
    const modal = document.getElementByCl
}
const toggleModal= (id) => {
    const modalOpen = document.getElementById(id);
    console.log("hiiii")
    modalOpen.classList.toggle("hide");
    fadeModal.classList.toggle("hide");
}
[...botoesModal,fadeModal].forEach((el) => {
    el.addEventListener("click", () => toggleModal(el.dataset.modal));
})

botaoFechar.addEventListener("click", fechar())

function fechar(){
    botaoAbrir.className+= " ali";
    fadeModal.className+= " ali";
}
