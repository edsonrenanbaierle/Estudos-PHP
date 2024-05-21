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

                var dt = data.split("|")

                $("#txtNome").val(dt[0].split(":")[1])
                $("#txtEmail").val(dt[1].split(":")[1])
                $("#txtTelefone").val(dt[2].split(":")[1])
            },
            error: function (error) {
                console.log(error)
            }
        })
    })

    $("#txtCep").focusout(function (){
        if($("#txtCep").val().length >= 5){
            let cep = $("#txtCep").val().replace("-", "")
            const url = "https://viacep.com.br/ws/" + String(cep) + "/json/"
            $.ajax({
                url: url,
                type: "GET",
                dataType: "JSON",
                data: {},
                success: function (data) {
                    console.log(data);
                    if(data != null){
                        $("#txtLogradouro").val(data.logradouro)
                        $("#txtBairro").val(data.bairro) 
                        $("#txtCidade").val(data.localidade) 
                        $("#txtEstado").val(data.uf) 
                    }

                },
                error: function (error) {
                    console.log(error)
                }
            })
        }else{
            console.log("else")
            console.log($("#txtCep").val())
        }

        
    })

})