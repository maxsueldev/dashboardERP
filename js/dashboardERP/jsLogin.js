function efetuarLogin() { 
    $('#btnLogin').attr('disabled', 'disabled');
    destinoPHP = "interacao/iLogin.php";
    parametros = $("#frmLogin").serialize() + "&acao=efetuarLogin"; 
    
    $.post(destinoPHP, parametros, function(data) {
        if (data.length > 0) {
            $('#btnLogin').removeAttr('disabled');
            $.smkAlert({
                text: data,
                type: 'danger',
                time: 10
            });
            return false;
        }
        location.href = "view/index.php";
    });
}