// toggle display side nav
function myFunction() {
	var sidebar = document.getElementById("mySidebar");
	var main_content = document.getElementById("main-content");

	if (sidebar.style.width === "0px") {
		sidebar.style.width = "250px";
		main_content.style.marginLeft = "250px";
	}
	else {
		sidebar.style.width = "0px";
		main_content.style.marginLeft = "0px";
	}
}


// drop down log out button
function myFunction_logout() {
  document.getElementById("myDropdown").classList.toggle("show");
}

window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}