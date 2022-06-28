//apply profile picture
function triggerClick(e) {
	document.querySelector('#profile_pic').click();
}
function displayImage(e) {
	if (e.files[0]) {
		var reader = new FileReader();
		reader.onload = function(e){
		  document.querySelector('#profileDisplay').setAttribute('src', e.target.result);
		}
		reader.readAsDataURL(e.files[0]);
	}
}

const form_credential = document.getElementById("form_credential");
const username = document.getElementById("username");
const password = document.getElementById("password");
const confirmPass = document.getElementById("confirmPass");

form_credential.addEventListener('submit', (e) => {
	const usernameValue = username.value;
	const passwordValue = password.value;
	const confirmPassValue = confirmPass.value;

	if (usernameValue === '') {
		setErrorFor(username, 'Enter username');
		e.preventDefault();
	}
	else {
		setValidInputFor(username);
	}
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