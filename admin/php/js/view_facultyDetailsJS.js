const form_delMember = document.getElementById("form_delMember");
const chck_confirm = document.getElementById("chck_confirm");

form_delMember.addEventListener('submit', (e) => {
	var chck_confirm_checked = chck_confirm.checked;

	if (chck_confirm_checked == false) {
		e.preventDefault();
	} 
});