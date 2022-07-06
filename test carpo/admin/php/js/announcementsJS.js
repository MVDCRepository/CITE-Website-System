//delete modal and news events table
var del_newsEvent_btn = document.querySelectorAll('#del_newsEvent_btn');
	
del_newsEvent_btn.forEach( function(btn) {
	btn.onclick = function() {
		var modal = btn.getAttribute("data-modal");

		document.getElementById(modal).style.display = "block";

		var announcement_tbl = document.getElementById('announcement_tbl');
		for (var i = 1; i < announcement_tbl.rows.length; i++) {
			announcement_tbl.rows[i].onclick = function() {
				document.getElementById('del_bulletinID').value = this.cells[0].innerHTML;
				document.getElementById('del_title').innerHTML = this.cells[1].innerHTML;
				document.getElementById('del_content').innerHTML = this.cells[3].innerHTML;
			};
		}
	};
});
	
var close_modaldelete_BTN = document.querySelectorAll("#close_modaldelete");

close_modaldelete_BTN.forEach(function(btn) {
	btn.onclick = function() {
		var modal = (btn.closest(".delete-modal").style.display = "none");
	}
});

window.addEventListener('click', function(i) {
	if(i.target.className === "delete-modal") {
		i.target.style.display = "none";
	}
});