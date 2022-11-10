const fadeModal = document.getElementById("fadeModal");
const botaoAbrir = document.getElementsByClassName("botao");
const botoesModal = [...botaoAbrir].filter((el) =>{
    return el.dataset.modal != null
});

const toggleModal= (id) => {
    const modalOpen = document.getElementById(id);
    modalOpen.classList.toggle("hide");
    fadeModal.classList.toggle("hide");
}
[...botoesModal,fadeModal].forEach((el) => {
    el.addEventListener("click", () => toggleModal(el.dataset.modal));
})




