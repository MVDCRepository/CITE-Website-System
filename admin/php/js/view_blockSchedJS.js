// accept student modal
var accept_btn = document.querySelectorAll('#accept_btn');
	
accept_btn.forEach( function(btn) {
	btn.onclick = function() {
		var modal = btn.getAttribute("data-modal");

		document.getElementById(modal).style.display = "block";

		var student_tbl = document.getElementById('student_tbl');
		for (var i = 1; i < student_tbl.rows.length; i++) {
			student_tbl.rows[i].onclick = function() {
				document.getElementById('accept_student_id').value = this.cells[0].innerHTML;
				document.getElementById('accept_student_id_number').innerHTML = this.cells[1].innerHTML;
				document.getElementById('accept_student_name').innerHTML = this.cells[2].innerHTML;
			};
		}
	};
});
	
var close_modalaccept = document.querySelectorAll("#close_modalaccept");

close_modalaccept.forEach(function(btn) {
	btn.onclick = function() {
		var modal = (btn.closest(".modal").style.display = "none");
	}
});

window.addEventListener('click', function(i) {
	if(i.target.className === "modal") {
		i.target.style.display = "none";
	}
});
// accept student modal

// unload student modal
var unload_btn = document.querySelectorAll('#unload_btn');
	
unload_btn.forEach( function(btn) {
	btn.onclick = function() {
		var modal = btn.getAttribute("data-modal");

		document.getElementById(modal).style.display = "block";

		var student_tbl = document.getElementById('student_tbl');
		for (var i = 1; i < student_tbl.rows.length; i++) {
			student_tbl.rows[i].onclick = function() {
				document.getElementById('student_id').value = this.cells[0].innerHTML;
				document.getElementById('student_id_number').innerHTML = this.cells[1].innerHTML;
				document.getElementById('student_name').innerHTML = this.cells[2].innerHTML;
			};
		}
	};
});
	
var close_modalunload = document.querySelectorAll("#close_modalunload");

close_modalunload.forEach(function(btn) {
	btn.onclick = function() {
		var modal = (btn.closest(".delete-modal").style.display = "none");
	}
});

window.addEventListener('click', function(i) {
	if(i.target.className === "delete-modal") {
		i.target.style.display = "none";
	}
});
// unload student modal