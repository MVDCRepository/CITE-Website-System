//delete modal evaluation table
var del_subBtn = document.querySelectorAll('#del_subBtn');
	
del_subBtn.forEach( function(btn) {
	btn.onclick = function() {
		var modal = btn.getAttribute("data-modal");

		document.getElementById(modal).style.display = "block";

		var tbl_1styr_1stsem = document.getElementById('tbl_1styr_1stsem');
		for (var i = 1; i < tbl_1styr_1stsem.rows.length; i++) {
			tbl_1styr_1stsem.rows[i].onclick = function() {
				document.getElementById('del_subj_id').value = this.cells[0].innerHTML;
				document.getElementById('del_courseCode').innerHTML = this.cells[1].innerHTML;
				document.getElementById('del_courseDesc').innerHTML = this.cells[2].innerHTML;
				document.getElementById('del_units').innerHTML = this.cells[3].innerHTML;
			};
		}

		var tbl_1styr_2ndsem = document.getElementById('tbl_1styr_2ndsem');
		for (var i = 1; i < tbl_1styr_2ndsem.rows.length; i++) {
			tbl_1styr_2ndsem.rows[i].onclick = function() {
				document.getElementById('del_subj_id').value = this.cells[0].innerHTML;
				document.getElementById('del_courseCode').innerHTML = this.cells[1].innerHTML;
				document.getElementById('del_courseDesc').innerHTML = this.cells[2].innerHTML;
				document.getElementById('del_units').innerHTML = this.cells[3].innerHTML;
			};
		}
		
		var tbl_2ndyr_1stsem = document.getElementById('tbl_2ndyr_1stsem');
		for (var i = 1; i < tbl_2ndyr_1stsem.rows.length; i++) {
			tbl_2ndyr_1stsem.rows[i].onclick = function() {
				document.getElementById('del_subj_id').value = this.cells[0].innerHTML;
				document.getElementById('del_courseCode').innerHTML = this.cells[1].innerHTML;
				document.getElementById('del_courseDesc').innerHTML = this.cells[2].innerHTML;
				document.getElementById('del_units').innerHTML = this.cells[3].innerHTML;
			};
		}

		var tbl_2ndyr_2ndsem = document.getElementById('tbl_2ndyr_2ndsem');
		for (var i = 1; i < tbl_2ndyr_2ndsem.rows.length; i++) {
			tbl_2ndyr_2ndsem.rows[i].onclick = function() {
				document.getElementById('del_subj_id').value = this.cells[0].innerHTML;
				document.getElementById('del_courseCode').innerHTML = this.cells[1].innerHTML;
				document.getElementById('del_courseDesc').innerHTML = this.cells[2].innerHTML;
				document.getElementById('del_units').innerHTML = this.cells[3].innerHTML;
			};
		}

		var tbl_3rdyr_1stsem = document.getElementById('tbl_3rdyr_1stsem');
		for (var i = 1; i < tbl_3rdyr_1stsem.rows.length; i++) {
			tbl_3rdyr_1stsem.rows[i].onclick = function() {
				document.getElementById('del_subj_id').value = this.cells[0].innerHTML;
				document.getElementById('del_courseCode').innerHTML = this.cells[1].innerHTML;
				document.getElementById('del_courseDesc').innerHTML = this.cells[2].innerHTML;
				document.getElementById('del_units').innerHTML = this.cells[3].innerHTML;
			};
		}

		var tbl_3rdyr_2ndsem = document.getElementById('tbl_3rdyr_2ndsem');
		for (var i = 1; i < tbl_3rdyr_2ndsem.rows.length; i++) {
			tbl_3rdyr_2ndsem.rows[i].onclick = function() {
				document.getElementById('del_subj_id').value = this.cells[0].innerHTML;
				document.getElementById('del_courseCode').innerHTML = this.cells[1].innerHTML;
				document.getElementById('del_courseDesc').innerHTML = this.cells[2].innerHTML;
				document.getElementById('del_units').innerHTML = this.cells[3].innerHTML;
			};
		}
		
		var tbl_3rdyr_middleTerm = document.getElementById('tbl_3rdyr_middleTerm');
		for (var i = 1; i < tbl_3rdyr_middleTerm.rows.length; i++) {
			tbl_3rdyr_middleTerm.rows[i].onclick = function() {
				document.getElementById('del_subj_id').value = this.cells[0].innerHTML;
				document.getElementById('del_courseCode').innerHTML = this.cells[1].innerHTML;
				document.getElementById('del_courseDesc').innerHTML = this.cells[2].innerHTML;
				document.getElementById('del_units').innerHTML = this.cells[3].innerHTML;
			};
		}
		
		var tbl_4thyr_1stsem = document.getElementById('tbl_4thyr_1stsem');
		for (var i = 1; i < tbl_4thyr_1stsem.rows.length; i++) {
			tbl_4thyr_1stsem.rows[i].onclick = function() {
				document.getElementById('del_subj_id').value = this.cells[0].innerHTML;
				document.getElementById('del_courseCode').innerHTML = this.cells[1].innerHTML;
				document.getElementById('del_courseDesc').innerHTML = this.cells[2].innerHTML;
				document.getElementById('del_units').innerHTML = this.cells[3].innerHTML;
			};
		}

		var tbl_4thyr_2ndsem = document.getElementById('tbl_4thyr_2ndsem');
		for (var i = 1; i < tbl_4thyr_2ndsem.rows.length; i++) {
			tbl_4thyr_2ndsem.rows[i].onclick = function() {
				document.getElementById('del_subj_id').value = this.cells[0].innerHTML;
				document.getElementById('del_courseCode').innerHTML = this.cells[1].innerHTML;
				document.getElementById('del_courseDesc').innerHTML = this.cells[2].innerHTML;
				document.getElementById('del_units').innerHTML = this.cells[3].innerHTML;
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


const add_sub_form = document.getElementById('add_sub_form');
const sem = document.getElementById('sem');
const yr_lvl = document.getElementById('yr_lvl');

add_sub_form.addEventListener('submit', (e) => {
	const semValue = sem.value;
	const yr_lvlValue = yr_lvl.value;

	if (semValue === 'Middle Term' && yr_lvlValue != '3rd') {
		setErrorFor(yr_lvl, 'Only third year have Middle Term for semester');
		e.preventDefault();
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