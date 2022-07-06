const upd_student_cred_form = document.getElementById("upd_student_cred_form");
const password = document.getElementById("password");
const confirmPass = document.getElementById("confirmPass");

upd_student_cred_form.addEventListener('submit', (e) => {
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