const fadeModal = document.getElementById("fadeModal");
const botoes = document.getElementsByClassName("botao");
const fechar = document.getElementsByClassName("fechar");

const botaoModal = [...botoes].filter((el) => {
    return el.dataset.modal != null;
});

const modalAberto = () => {
    const modal = document.getElementsByClassName("modal");
    const modalOpen = [...modal].filter((el) => {
        return !el.classList.contains("hide");
    });

    return modalOpen[0];
}

const afModal = (id) => {
    if(id == undefined)
    {
        const modalOpen = modalAberto();
        modalOpen.classList.toggle("hide");
        fadeModal.classList.toggle("hide");
    }
    else
    {
        const modalOpen = document.getElementById(id);
        modalOpen.classList.toggle("hide");
        fadeModal.classList.toggle("hide");
    }
}

[...botaoModal, fadeModal, ...fechar].forEach((el) => {
    el.addEventListener("click", () => afModal(el.dataset.modal))
})


