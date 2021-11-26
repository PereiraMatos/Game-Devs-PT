let noSubmit = true;

function changeMario() {
    console.log('submit');
    if(noSubmit === true) {
        document.querySelector('#mario').src = './imagens/mario_submit.png';
        noSubmit = false;
    }else {
        document.querySelector('#mario').src = './imagens/mario_nosubmit.png';
        noSubmit = true;
    }

    return false;
}