function search_subject() {
    var yr_lvl = document.getElementById("yr_lvl").value;
    var sem = document.getElementById("sem").value;
    var block_no = document.getElementById("block_no").value;
    var acad_yr = document.getElementById("acad_yr").value;

    xmlhttp = new XMLHttpRequest();
    xmlhttp.open("GET", "../server/load_blockSub.php?yr_lvl="+yr_lvl+"&sem="+sem+"&block_no="+block_no+"&acad_yr="+acad_yr,false);
    xmlhttp.send(null);

    document.getElementById('loadBlock_sub').innerHTML=xmlhttp.responseText;
}

window.onload = search_subject;


block_status();
function block_status() {
    var block_status = document.getElementById('block_status').value;
    var block_form = document.getElementById('block_form');

    var yr_lvl = document.getElementById("yr_lvl");
    var sem = document.getElementById("sem");
    var block_no = document.getElementById("block_no");

    if (block_status != null) {
        if (block_status == 'Pending') {
            block_form.style.display = 'none';
            yr_lvl.disabled = true;
            sem.disabled = true;
            block_no.disabled = true;
        }
        else if (block_status == 'Done') {
            block_form.style.display = 'block';
        }
    }
}

var modal = document.getElementById("modal");
var cancel_btn = document.getElementById("cancel_btn");
var close_modal = document.getElementsByClassName("close")[0];
cancel_btn.onclick = function() {
    modal.style.display = "block";
}

close_modal.onclick = function() {
    modal.style.display = "none";
}

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}