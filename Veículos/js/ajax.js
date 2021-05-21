function inserirVeiculo(){
    formulario = $("#frm_veiculos").serialize();
    $.ajax({
        url: 'veiculo/inserir.php',
        type: 'post',
        data: formulario,
        datatype: 'html',
        cache: false,
        beforeSend: function(){
            $("#resultado").html("Enviando...");
        }
    }).done(function(msg){
        $("#resultado").html(msg);
    }).fail(function(jqXHR, textStatus, msg){
        alert(msg);
    });
	limpar();
}
function getCodVeic(){
    codigo_veic = $("#codigo").val();

    $.ajax({
       url : "veiculo/pesquisar.php",
       type : 'get',
       data : {
           codigo : codigo_veic,
       },
       datatype : 'html',
       cache : false,
       beforeSend : function(){
           $("#resultado").html("Enviando...");
       }
    }).done(function(msg){
        $("#resultado").html(msg);
    }).fail(function(jqXHR, textStatus, msg){
        alert(msg);
    });
}
function deletarVeiculo(){
    var confirmacao = confirm("Deseja excluir o pet " + $("#tdnome").text() + "?");

    if(confirmacao == true){
        codigo_veic = $("#codigo_veic").val();

        $.ajax({
            url: "veiculo/excluir.php",
            type: 'get',
            data: {
                codigo: codigo_veic
            },
            datatype: 'html',
            beforeSend: function(){
                $("#resultado").html("Enviando...");
            }
        }).done(function(msg){
            $("#resultado").html(msg);
        }).fail(function(jqXHR, textStatus, msg){
            alert(msg);
        });
    }
}
function buscarVeiculo(){
    codigo_veic = $("#codigo").val();

    $.ajax({
        url: 'veiculo/buscar.php',
        type: 'get',
        data: {
            codigo: codigo_veic
        },
        datatype: 'json',
        cache: false,
        beforeSend: function(){
            $("#resultado").html("Enviando...");
        }
    }).done(function(msg){
        carregar(JSON.parse(msg));
    }).fail(function(jqXHR,textStatus,msg){ 
        alert(msg);
    });
}
function carregar(valor){
	 $("#codigo_veic").val(valor.codigo);
    $("#proprietario").val(valor.proprietario);
    $("#modelo").val(valor.modelo);
    $("#marca").val(valor.marca);
	$("#cor").val(valor.cor);
	$("#vendido").val(valor.vendido);
	$("#resultado").html("Carregado!");
}
function atualizarVeiculo(){
	data = $("#frm_veiculos").serialize();
	$.ajax({
		url: "veiculo/editar.php",
		type: 'post',
		data: data,
		datatype: 'html',
		beforeSend: function(){
			$("#resultado").html("Enviando");
		}	
	}).done(function(msg){
		$("#resultado").html(msg);
	}).fail(function(jqXHR, textStatus, msg){
		alert(msg);
	});
}
function limpar (){
        $("#codigo_veic").val("");
        $("#proprietario").val("");
        $("#modelo").val("");
        $("#marca").val("");
        $("#cor").val("");
        $("#vendido").val("");
}