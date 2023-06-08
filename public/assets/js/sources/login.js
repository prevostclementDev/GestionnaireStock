document.addEventListener('DOMContentLoaded', () => {

    const update_step = document.querySelectorAll('.update_step');
    if(update_step.length > 0) {

        let step = 1;

        update_step.forEach(button => {
            button.onclick = (e) => {
                e.preventDefault();
                let newStep = step+1;
                document.querySelector('#step'+step).classList.add('inactive'); // INACTIVE FIRST FORM
                document.querySelector('#step'+newStep).classList.remove('inactive'); // ACTIVE SECOND FORM
                document.querySelector('.step_v.step'+newStep).classList.add('active'); // UPDATE STEP VISIBILITY
            }
        })

    }
})