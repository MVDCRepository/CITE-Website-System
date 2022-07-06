//delete modal evaluation table
var del_cmoSeries = document.querySelectorAll('#del_cmoSeries');
	
del_cmoSeries.forEach( function(btn) {
	btn.onclick = function() {
		var modal = btn.getAttribute("data-modal");

		document.getElementById(modal).style.display = "block";

		var evaluation_table = document.getElementById('evaluation_table');
		for (var i = 1; i < evaluation_table.rows.length; i++) {
			evaluation_table.rows[i].onclick = function() {
				document.getElementById('del_eval_id').value = this.cells[0].innerHTML;
				document.getElementById('del_cmo').innerHTML = this.cells[1].innerHTML;
				document.getElementById('del_series').innerHTML = this.cells[2].innerHTML;
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


//delete modal academic year table
var del_acadYr = document.querySelectorAll('#del_acadYr');
	
del_acadYr.forEach( function(btn) {
	btn.onclick = function() {
		var modal = btn.getAttribute("data-modal");

		document.getElementById(modal).style.display = "block";

		var ay_table = document.getElementById('ay_table');
		for (var i = 1; i < ay_table.rows.length; i++) {
			ay_table.rows[i].onclick = function() {
				document.getElementById('del_acad_id').value = this.cells[0].innerHTML;
				document.getElementById('del_acadyr').innerHTML = this.cells[1].innerHTML;
				document.getElementById('del_status').innerHTML = this.cells[2].innerHTML;
			};
		}
	};
});
	
var close_modaldelete_BTN_ay = document.querySelectorAll("#close_modaldelete_ay");

close_modaldelete_BTN_ay.forEach(function(btn) {
	btn.onclick = function() {
		var modal = (btn.closest(".delete-modal").style.display = "none");
	}
});

window.addEventListener('click', function(i) {
	if(i.target.className === "delete-modal") {
		i.target.style.display = "none";
	}
});


function show_delete_notif() {
	var modal_delete_notif = document.getElementById('modal_delete_notif').style.display = 'block';
}
