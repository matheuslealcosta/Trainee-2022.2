const fadeModal = document.getElementById("fadeModal");
const botoes = document.getElementsByClassName("botao");

const botaoModal = [...botoes].filter((el) => {
    return el.dataset.modal != null;
});

const toggleModal = (id) => {
    const modalOpen = document.getElementById(id);
    modalOpen.classList.toggle("hide");
}

[...botaoModal, fadeModal].forEach((el) => {
    el.addEventListener("click", () => toggleModal(el.dataset.modal))
})