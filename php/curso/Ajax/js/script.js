$(document).ready(function(){
    $("#btnCadastrar").click(function (){
        //objeto com infos dos campos do formulario
        var obj = {
            txtNome : $("#txtNome").val(),
            txtEmail : $("#txtEmail").val(),
            txtTelefone: $("#txtTelefone").val()
        }
        // spresultado
        $.ajax({
            url: "action/usuarioAction.php?req=1",
            type: "POST",
            dataType: "TEXT",
            data: obj,
            beforeSend : function(){
                $("#spresultado").html("Processando...")
            },
            sucess : function(data){
                console.log(data)
                console.log("sucess");
            },
            error: function(data){
                console.log(data);
                console.log("erro");
            },
            complete : function(){

            }
        })
    })

    $("#btnConsultar").click(function () {
        $.ajax({
            url: "action/UsuarioAction.php?req=2",
            type: "GET",
            dataType: "TEXT",
            data: {},
            success: function (data) {
                console.log(data);
                $("#spresultado").html(data);

                var dt = data.split("|");

                $("#txtNome").val(dt[0].split(":")[1]);
                $("#txtEmail").val(dt[1].split(":")[1]);
                $("#txtTelefone").val(dt[2].split(":")[1]);
            },
            error: function (error) {
                console.log(error);
            }
        });
    });

})