const login_form = document.getElementById("login_form");
const username = document.getElementById("username");
const password = document.getElementById("password");

let shouldValidate = false;
let isFormValid = false;

login_form.addEventListener('submit', (e) => {
	e.preventDefault();
	shouldValidate = true;
	checkInputs();
	// if (isFormValid) {
	// 	login();
	// }
});

// check input
function checkInputs() {
	const usernameValue = username.value;
	const passwordValue = password.value;


	if (!shouldValidate) return;
	
	isFormValid = true;

	if (usernameValue === '') {
		setErrorFor(username, 'Enter Username');
		isFormValid = false;
	}
	else {
		setValidInputFor(username);
	}

	if (passwordValue === '') {
		setErrorFor(password, 'Enter Password');
		isFormValid = false;
	}
	else {
		setValidInputFor(password);
	}
}

function setErrorFor(input, message) {
	const formControl = input.parentElement;
	const small = formControl.querySelector('small');
	formControl.className = 'form-control error';
	small.innerText = message;
}

function setValidInputFor(input) {
	const formControl = input.parentElement;
	formControl.className = 'form-control success';
}