//accept modal evaluation table
var accept_student_req = document.querySelectorAll('#accept_student_req');
	
accept_student_req.forEach( function(btn) {
	btn.onclick = function() {
		var modal = btn.getAttribute("data-modal");

		document.getElementById(modal).style.display = "block";

		var requirement_tbl = document.getElementById('requirement_tbl');
		for (var i = 1; i < requirement_tbl.rows.length; i++) {
			requirement_tbl.rows[i].onclick = function() {
				document.getElementById('accept_req_id').value = this.cells[0].innerHTML;
				document.getElementById('accept_file_name').innerHTML = this.cells[1].innerHTML;
				document.getElementById('accept_dateTime').innerHTML = this.cells[2].innerHTML;
			};
		}
	};
});
	
var close_modalAccept = document.querySelectorAll("#close_modalAccept");

close_modalAccept.forEach(function(btn) {
	btn.onclick = function() {
		var modal = (btn.closest(".modal").style.display = "none");
	}
});

window.addEventListener('click', function(i) {
	if(i.target.className === "modal") {
		i.target.style.display = "none";
	}
});

//decline modal evaluation table
var dec_student_req = document.querySelectorAll('#dec_student_req');
	
dec_student_req.forEach( function(btn) {
	btn.onclick = function() {
		var modal = btn.getAttribute("data-modal");

		document.getElementById(modal).style.display = "block";

		var requirement_tbl = document.getElementById('requirement_tbl');
		for (var i = 1; i < requirement_tbl.rows.length; i++) {
			requirement_tbl.rows[i].onclick = function() {
				document.getElementById('dec_req_id').value = this.cells[0].innerHTML;
				document.getElementById('dec_file_name').innerHTML = this.cells[1].innerHTML;
				document.getElementById('dec_dateTime').innerHTML = this.cells[2].innerHTML;
			};
		}
	};
});
	
var close_modalDec = document.querySelectorAll("#close_modalDec");

close_modalDec.forEach(function(btn) {
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
