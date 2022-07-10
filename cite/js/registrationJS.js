// generates student's credential
generate_id_number();
function generate_id_number() {
    function makeid(length) {
        var result           = '';
        var characters       = '0123456789';
        var charactersLength = characters.length;
        for ( var i = 0; i < length; i++ ) {
            result += characters.charAt(Math.floor(Math.random() * 
            charactersLength));
        }
        return result;
    }
    document.getElementById("id_number").value = (makeid(8));
}

// credentials form
const register_form = document.getElementById("register_form");
const id_number = document.getElementById("id_number");
const password = document.getElementById("password");
const confirmPass = document.getElementById("confirmPass");

register_form.addEventListener('submit', (e) => {
    const passwordValue = password.value;
    const confirmPassValue = confirmPass.value;
    
    if (passwordValue === '') {
        setErrorFor(password, 'Enter password');
        e.preventDefault();
    }
    else {
        setValidInputFor(password);
    }
    if (confirmPassValue === '') {
        setErrorFor(confirmPass, 'Confirm password');
        e.preventDefault();
    }
    else {
        setValidInputFor(confirmPass);
    }
    if (confirmPassValue !== "") {
        if (confirmPassValue !== passwordValue) {
          setErrorFor(confirmPass, 'Password not match');
          e.preventDefault();
        }
        else {
          setValidInputFor(confirmPass);
        }
    }
});

function setErrorFor(input, message) {
    const formControl = input.parentElement;
    const small = formControl.querySelector('small');
    formControl.className = 'control-form error';
    small.innerText = message;
}

function setValidInputFor(input) {
    const formControl = input.parentElement;
    formControl.className = 'control-form success';
}