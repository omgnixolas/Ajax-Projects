function inserirPet(){
    data = $("#frm_pet").serialize();
    $.ajax({
        url: "pet/inserir.php",
        type: 'post', 
        data: data,
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

function getPetCodigo (){
    codigo_pet = $("#codigo_pet").val();

    $.ajax({
       url : "pet/pesquisar2.php",
       type : 'get',
       data : {
           codigo : codigo_pet
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
function deletarPet(){
    var confirmacao = confirm("Deseja excluir o pet " + $("#tdnome").text() + "?");

    if(confirmacao == true){
        codigo_pet = $("#codigo_pet").val();

        $.ajax({
            url: "pet/excluir.php",
            type: 'get',
            data: {
                codigo: codigo_pet
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
function buscarPet(){
	codigo_pet = $("#codigo_pet").val();
	$.ajax({
		url: "pet/buscar.php",
		type: 'get',
		data: { codigo : codigo_pet},
		datatype: 'json',
		beforeSend: function(){
			$("#resultado").html("Enviando");
		}
	}).done(function(msg){
		carregar(JSON.parse(msg));
	}).fail(function(jqXHR, textStatus, msg){
		alert(msg);
	});
}
function carregar(valor){
	 $("#codigo").val(valor.codigo);
    $("#nome").val(valor.nome);
    $("#tipo").val(valor.tipo);
    $("#idade").val(valor.idade);
	$("#resultado").html("Carregado!");
}
function atualizarPet(){
	data = $("#frm_pet").serialize();
	$.ajax({
		url: "pet/editar.php",
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
function limpar(){
    $("#codigo").val("");
    $("#nome").val("");
    $("#tipo").val("");
    $("#idade").val("");
}
