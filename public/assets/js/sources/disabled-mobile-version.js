const body = document.querySelector('body');
check_version_usable()

window.addEventListener('resize', () => {
    check_version_usable()
})

function check_version_usable(){
    if ( window.innerWidth < 550 ) {
        body.innerHTML = 'Votre écran n\'est pas encore compatible avec notre site internet';
    } else if ( body.innerHTML ===  'Votre écran n\'est pas encore compatible avec notre site internet' && window.innerWidth > 550) {
        location.reload();
    }
}