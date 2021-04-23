/*function inserirUsuario() {   
    $('#btnCadastrarUsuario').attr('disabled', 'disabled');
    destinoPHP = "interacao/iUsuario.php";
    parametros = $("#frmCadastroUsuario").serialize() + "&acao=inserirUsuario";
    
    $.post(destinoPHP, parametros, function(data) {
        if (data.length > 0) { 
            $('#btnCadastrarUsuario').removeAttr('disabled');
            $.smkAlert({
                text: data,
                type: 'danger',
                time: 10
            });
            return false;
        } else {
            data = 'Sucesso! Os dados foram armazenados com sucesso!';
            //$("#limparCampos").click();
            $.smkAlert({
                text: data,
                type: 'success'
            });
        }
    });
}*/