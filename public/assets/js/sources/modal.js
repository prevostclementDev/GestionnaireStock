document.addEventListener('DOMContentLoaded', () => {

    const OpenLinkProductToStorage = document.querySelector('#linkproducttostorage-opener');
    const linkProductToStorage = document.querySelector('#product-link-to-storage');

    const OpenLinkUserToStorage = document.querySelector('#linkusertostorage-opener');
    const linkUserToStorage = document.querySelector('#user-link-to-storage');

    const OpenaddProduct = document.querySelector('#addproduct-opener');
    const addProduct = document.querySelector('#add-product');

    const OpenaddStorage = document.querySelector('#addstorage-opener');
    const addStorage = document.querySelector('#add-storage');

    const OpenaddReplenishment = document.querySelector('#addreplenishment-opener');
    const addReplenishment = document.querySelector('#add-replenishment');

    const OpenaddNote = document.querySelector('#addnote-opener');
    const addNote = document.querySelector('#add-note');

    const OpenaddOrder = document.querySelector('#addorder-opener');
    const addOrder = document.querySelector('#add-order');

    const OpenaddUser = document.querySelector('#adduser-opener');
    const addUser = document.querySelector('#add-user');

    eventOpenPopUp(OpenLinkProductToStorage,linkProductToStorage);
    eventOpenPopUp(OpenLinkUserToStorage,linkUserToStorage);
    eventOpenPopUp(OpenaddProduct,addProduct);
    eventOpenPopUp(OpenaddStorage,addStorage);
    eventOpenPopUp(OpenaddReplenishment,addReplenishment);
    eventOpenPopUp(OpenaddNote,addNote);
    eventOpenPopUp(OpenaddOrder,addOrder);
    eventOpenPopUp(OpenaddUser,addUser);

    eventClosePopUp();
})

function eventOpenPopUp(buttonOpen,modal) {
    if( (buttonOpen !== null && buttonOpen !== undefined) && (modal !== null && modal !== undefined) ) {
        buttonOpen.addEventListener('click',(e)=>{
            e.preventDefault();
            modal.classList.add('visible');
            document.body.style.overflow = 'hidden';
        })
    }
}

function eventClosePopUp(){
    const popupform = document.querySelectorAll('.popupform');
    popupform.forEach(el=>{
        el.addEventListener('click', (e) => {
            if(e.target === el) {
                el.classList.remove('visible');
                document.body.style.overflow = 'auto';
            }
        })
    })
}
