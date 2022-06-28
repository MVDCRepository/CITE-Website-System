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


// tbl_1styr();

// function tbl_1styr() {
// 	units_1styr_1stsem();
// 	units_1styr_2ndsem();

// 	function units_1styr_1stsem () {
// 		var tbl_1styr_1stsem = document.getElementById("tbl_1styr_1stsem");
// 		var total_units = 0;
// 		var total_lec = 0;
// 		var total_lab = 0;
	            
// 		for(var i = 1; i < tbl_1styr_1stsem.rows.length; i++) {
// 		    total_units = total_units + parseInt(tbl_1styr_1stsem.rows[i].cells[3].innerHTML);
// 		}
// 		for(var i = 1; i < tbl_1styr_1stsem.rows.length; i++) {
// 		    total_lec = total_lec + parseInt(tbl_1styr_1stsem.rows[i].cells[4].innerHTML);
// 		}
// 		for(var i = 1; i < tbl_1styr_1stsem.rows.length; i++) {
// 		    total_lab = total_lab + parseInt(tbl_1styr_1stsem.rows[i].cells[5].innerHTML);
// 		}

// 		document.getElementById("total_units").innerHTML = "Total Units : " + total_units;
// 		document.getElementById("total_lec_msg").innerHTML = "Total Lec : " + total_lec;
// 		document.getElementById("total_lab_msg").innerHTML = "Total Lab : " + total_lab;
// 		console.log(total_units);
// 	}

// 	function units_1styr_2ndsem () {
// 		var tbl_1styr_2ndsem = document.getElementById("tbl_1styr_2ndsem");
// 		var total_units = 0;
// 		var total_lec = 0;
// 		var total_lab = 0;
	            
// 		for(var i = 1; i < tbl_1styr_2ndsem.rows.length; i++) {
// 		    total_units = total_units + parseInt(tbl_1styr_2ndsem.rows[i].cells[3].innerHTML);
// 		}
// 		for(var i = 1; i < tbl_1styr_2ndsem.rows.length; i++) {
// 		    total_lec = total_lec + parseInt(tbl_1styr_2ndsem.rows[i].cells[4].innerHTML);
// 		}
// 		for(var i = 1; i < tbl_1styr_2ndsem.rows.length; i++) {
// 		    total_lab = total_lab + parseInt(tbl_1styr_2ndsem.rows[i].cells[5].innerHTML);
// 		}

// 		document.getElementById("total_units").innerHTML = "Total Units : " + total_units;
// 		document.getElementById("total_lec_msg").innerHTML = "Total Lec : " + total_lec;
// 		document.getElementById("total_lab_msg").innerHTML = "Total Lab : " + total_lab;
// 		console.log(total_units);
// 	}
// }