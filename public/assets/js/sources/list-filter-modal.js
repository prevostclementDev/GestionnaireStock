document.addEventListener('DOMContentLoaded', () => {

    const openerModal = document.querySelector('#filter-modal-opener');
    if( openerModal !== undefined && openerModal !== null ) {
        const modal = document.querySelector('#filter-modal');

        openerModal.onclick = (e) => {
            e.preventDefault();
            if(modal.classList.contains('visible')) {
                modal.classList.remove('visible');
            } else {
                modal.classList.add('visible');
            }
        }

    }

})