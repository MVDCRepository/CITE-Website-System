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

// load student requirements depends on the student status
load_student_requirements();
function load_student_requirements() {
	var student_status = document.getElementById('student_status').innerHTML;

	var freshmen_requirements = document.getElementById('freshmen_requirements');
	var transferee_requirements = document.getElementById('transferee_requirements');
	var regular_grad_requirements = document.getElementById('regular_grad_requirements');
	var transferee_grad_requirements = document.getElementById('transferee_grad_requirements');

	if (student_status == 'Regular' || student_status == 'Freshmen') {
		freshmen_requirements.style.display = "block";
	}
	else {
		freshmen_requirements.style.display = "none";
	}

	if (student_status == 'Regular Graduating') {
		regular_grad_requirements.style.display = "block";
	}
	else {
		regular_grad_requirements.style.display = "none";
	}

	if (student_status == 'Transferee') {
		transferee_requirements.style.display = "block";
	}
	else {
		transferee_requirements.style.display = "none";
	}

	if (student_status == 'Transferee Graduating') {
		transferee_grad_requirements.style.display = "block";
	}
	else {
		transferee_grad_requirements.style.display = "none";
	}
}

// load academic year
load_academic_info();
function load_academic_info() {
	var student_status = document.getElementById('student_status');
	var tbody_acad_info = document.getElementById('tbody_acad_info');
	var tbody_acad_info_transferee = document.getElementById('tbody_acad_info_transferee');

	if (student_status.innerHTML == 'Regular' || student_status.innerHTML == 'Freshmen' || student_status.innerHTML == 'Regular Graduating') {
		tbody_acad_info_transferee.style.display = 'none';
	}
	if (student_status.innerHTML == 'Transferee' || student_status.innerHTML == 'Transferee Graduating') {
		tbody_acad_info.style.display = 'none';
	}
}

//accept modal evaluation table
var upload_reqBtn = document.querySelectorAll('#upload_reqBtn');
	
upload_reqBtn.forEach( function(btn) {
	btn.onclick = function() {
		var modal = btn.getAttribute("data-modal");

		document.getElementById(modal).style.display = "block";

		var requirements_tbl = document.getElementById('requirements_tbl');
		for (var i = 0; i < requirements_tbl.rows.length; i++) {
			requirements_tbl.rows[i].onclick = function() {
				document.getElementById('file_name').value = this.cells[0].innerHTML;
				document.getElementById('txt_fileName').innerHTML = this.cells[0].innerHTML;
			};
		}
	};
});
	
var close_modalReq = document.querySelectorAll("#close_modalReq");

close_modalReq.forEach(function(btn) {
	btn.onclick = function() {
		var modal = (btn.closest(".modal").style.display = "none");
	}
});

window.addEventListener('click', function(i) {
	if(i.target.className === "modal") {
		i.target.style.display = "none";
	}
});
