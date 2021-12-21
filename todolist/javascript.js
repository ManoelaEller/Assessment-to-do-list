$(document).ready(function(){
	$("#form").on("submit", function(event){
		event.preventDefault();
		//receber os dados do forms;
		var dados = $("#form").serialize();
		
	});
});

$(document).ready(function(){
	$("#formentrar").on("submit", function(event){
		event.preventDefault();
		//receber os dados do forms;
		var dados1 = $("#formentrar").serialize();
	
	});
});

 var url = $('#url').val();
 alert(url);
$.post(url, dados, function(retorno){
	alert(retorno);
});