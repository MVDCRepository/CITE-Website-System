//apply profile picture
function triggerClick(e) {
  document.querySelector('#photo').click();
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

const news_eventsForm = document.getElementById("news_eventsForm");
const photo = document.getElementById("photo");
const title = document.getElementById("title");
const content = document.getElementById("content");
const time_date = document.getElementById("time_date");

let shouldValidate = false;
let isFormValid = false;

news_eventsForm.addEventListener('submit', (e) => {
	e.preventDefault();
	shouldValidate = true;
	checkInputs();
	if (isFormValid) {
		add_news_events();
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

function checkInputs() {
	const photoValue = photo.value;
	const titleValue = title.value;
	const contentValue = content.value;
	const time_dateValue = time_date.value;

	if (!shouldValidate) return;
	
	isFormValid = true;

	if (photoValue === '') {
		setErrorFor(photo, 'Select a photo');
		isFormValid = false;
	}
	else {
		setValidInputFor(photo);
	}

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

	if (time_dateValue === '') {
		setErrorFor(time_date, 'Enter time & date');
		isFormValid = false;
	}
	else {
		setValidInputFor(time_date);
	}
}

function add_news_events() {
	var photo = document.getElementById("photo").files[0].name;
	var title = document.getElementById("title").value;
	var content = document.getElementById("content").value;
	var time_date = document.getElementById("time_date").value;

	alert(photo);

	var serviceURL = "http://192.168.1.8:8086/wcfService.svc/SaveImage";

	var httpr = new XMLHttpRequest();
	httpr.open("POST", "./php/add_news_eventsPHP.php", true);
	httpr.setRequestHeader("Content-type","multipart/form-data","application/x-www-form-urlencoded");
	httpr.onreadystatechange = function() {
		if (httpr.readyState == 4 && httpr.status == 200) {
			// window.location = "./news_events.php";
		}
	}

	httpr.send("photo="+photo+
				"&title="+title+
				"&content="+content+
				"&time_date="+time_date);
}