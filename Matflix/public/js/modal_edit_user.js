const fModal = document.getElementById('fade_edit');
const edit_btn = document.getElementsByClassName('fa-pencil-square-o');

const editBtns = [...edit_btn].filter((el)=>{
    return el.dataset.modal!=null;
});

const modalAberto = () =>{
    const modal = document.getElementsByClassName('modal-user');
    const modalAbr = [...modal].filter((modal)=>{
        return !modal.classList.contains('hide');
    });

    return modalAbr[0];
}

const activateModal = (id) =>{

    if(id == undefined){
        fModal.classList.toggle('hide');
        const modal = modalAberto();
        modal.classList.toggle('hide');
    }else{
        const modal = document.getElementById(id);
        modal.classList.toggle('hide');
        fModal.classList.toggle('hide');
    }    
}

const botaoFechar = document.getElementsByClassName('botoes');

[...editBtns,fModal,...botaoFechar].forEach((el)=>{
    el.addEventListener("click",() => activateModal(el.dataset.modal));
})