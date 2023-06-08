document.addEventListener('DOMContentLoaded', () => {
    const langageButton = document.querySelector('#select-langs');
    if(langageButton !== null && langageButton !== undefined) {
        const langBoxSelected = document.querySelector('.lang-selector');
        langageButton.onclick = () => {
            if( langBoxSelected.classList.contains('active') ) {
                langBoxSelected.classList.remove('active');
            } else {
                langBoxSelected.classList.add('active');
            }
        }
    }
})