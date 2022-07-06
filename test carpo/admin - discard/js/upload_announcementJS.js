const uploadForm_announcement = document.getElementById("uploadForm_announcement");
const title = document.getElementById("title");
const content = document.getElementById("content");

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
	const titleValue = title.value;
	const contentValue = content.value;

	if (!shouldValidate) return;
	
	isFormValid = true;

	if (titleValue === '') {
		setErrorFor(title, 'Enter title');
		isFormValid = false;
	}
	else {
		setValidInputFor(title);
	}

	if (contentValue === '') {
		setErrorFor(content, 'Enter content');
		isFormValid = false;
	}
	else {
		setValidInputFor(content);
	}
}

function upload_announcement() {
	var title = document.getElementById("title").value;
	var content = document.getElementById("content").value;

	var httpr = new XMLHttpRequest();
	httpr.open("POST", "./php/upload_announcementPHP.php", true);
	httpr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	httpr.onreadystatechange = function() {
		if (httpr.readyState == 4 && httpr.status == 200) {
			window.location = "./announcement.php";
		}
	}

	httpr.send("title="+title+
				"&content="+content);
}