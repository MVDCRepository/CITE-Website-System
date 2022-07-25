function disableTextBoxOffice(health_df_office) {
    var office_transaction_text = document.getElementById("office_transaction_text");
    office_transaction_text.disabled = health_df_office.checked ? false : true;

    if (!office_transaction_text.disabled) {
        office_transaction_text.focus();
    }
    else {
        office_transaction_text.value = "";
    }
}

function disableTextBoxOthers(health_df_others) {
    var others_text = document.getElementById("others_text");
    others_text.disabled = health_df_others.checked ? false : true;

    if (!others_text.disabled) {
        others_text.focus();
    }
    else {
        others_text.value = "";
    }
}

function disableField_qstn4(qstn_4_yes) {
    var qstn_4_yes = document.getElementById('qstn_4_yes');
    var question_4_where = document.getElementById('question_4_where');
    question_4_where.disabled = qstn_4_yes.checked ? false : true;

    if (!question_4_where.disabled) {
        question_4_where.focus();
    }
    else {
        question_4_where.value = "";
    }
}

function disableField_qstn5(qstn_5_yes) {
    var qstn_5_yes = document.getElementById('qstn_5_yes');
    var question_5_where = document.getElementById('question_5_where');
    question_5_where.disabled = qstn_5_yes.checked ? false : true;

    if (!question_5_where.disabled) {
        question_5_where.focus();
    }
    else {
        question_5_where.value = "";
    }
}