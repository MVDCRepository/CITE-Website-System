const uploadForm_announcement = document.getElementById("updateForm_announcement");

const upd_bulletinID = document.getElementById("upd_bulletinID");
const update_title = document.getElementById("update_title");
const update_content = document.getElementById("update_content");

let shouldValidate = false;
let isFormValid = false;

uploadForm_announcement.addEventListener('submit', (e) => {
	e.preventDefault();
	shouldValidate = true;
	checkInputs();
	if (isFormValid) {
		upload_announcement();
	}
});

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

function checkInputs() {
	const titleValue = update_title.value;
	const contentValue = update_content.value;

	if (!shouldValidate) return;
	
	isFormValid = true;

	if (titleValue === '') {
		setErrorFor(update_title, 'Enter title');
		isFormValid = false;
	}
	else {
		setValidInputFor(update_title);
	}

	if (contentValue === '') {
		setErrorFor(update_content, 'Enter content');
		isFormValid = false;
	}
	else {
		setValidInputFor(update_content);
	}
}

function upload_announcement() {
	var upd_bulletinID = document.getElementById("upd_bulletinID").value;
	var update_title = document.getElementById("update_title").value;
	var update_content = document.getElementById("update_content").value;

	var httpr = new XMLHttpRequest();
	httpr.open("POST", "./php/upload_announcementPHP.php", true);
	httpr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	httpr.onreadystatechange = function() {
		if (httpr.readyState == 4 && httpr.status == 200) {
			window.location = "./announcement.php";
		}
	}

	httpr.send("upd_bulletinID="+upd_bulletinID+
				"&update_title="+update_title+
				"&update_content="+update_content);
}