$(document).ready(function(e){

	$('a').not('#buten').click (function(e){
		
		e.preventDefault();
		var href = $(this) . attr('href');
		$('#conteudo').load(href + ' #conteudo > *', function(){
			
			$("#data").datepicker({ maxDate: new Date() });
		});
	});
	
	$('.col-md-9').hide();
	$('.col-md-9').css("position", "absolute");
	$('.col-md-9').css("margin", "auto");
	$('.col-md-9').css("left", "70px");
	
	$('.row').hover(
	
		function(){
		
			$(this).children().show();
		},
		
		function(){
			
			$('.col-md-9').hide();
		}
	);
});

function verificaDoacao(){
	
	var assistido = document.forms["realizarDoacao"]["assistido"].value;
	var quantidade = document.forms["realizarDoacao"]["quantidade"].value;
	var produto = document.forms["realizarDoacao"]["doacao"].value;
	var data = document.forms["realizarDoacao"]["saida"].value;
	
	if (assistido == null || assistido == ""){
		
		alert("Nome da família assistida não foi especificado!");
		return false;
	}
	
	if (produto == null || produto == ""){
		
		alert("Produto não foi especificado!");
		return false;
	}
	
	if (quantidade == null || quantidade == "" || quantidade == 0){
		
		alert("Quantidade de " + produto + " não foi especificada!");
		return false;
	}
	
	if (data == null || data == ""){
		
		alert("Data de saída da doação não foi especificada!");
		return false;
	}
	
	return true;
}

function verificaArrecadacao(){
	
	var doador = document.forms["realizarArrecadacao"]["doador"].value;
	var produto = document.forms["realizarArrecadacao"]["doacao"].value;
	var quantidade = document.forms["realizarArrecadacao"]["quantidade"].value;
	var data = document.forms["realizarArrecadacao"]["entrada"].value;
	
	if (doador == null || doador == ""){
		
		alert("Doador não foi especificado!");
		return false;
	}
	
	if (produto == null || produto == ""){
		
		alert("Produto não foi especificado!");
		return false;
	}
	
	if (quantidade == null || quantidade == "" || quantidade == 0){
		
		alert("Quantidade de " + produto + " não foi especificada!");
		return false;
	}
	
	if (data == null || data == ""){
		
		alert("Data da arrecadação não foi especificada!");
		return false;
	}
	
	return true;
}

function verificaDinheiroA(){
	
	var doador = document.forms["arrecadaDinheiro"]["doador"].value;
	var quantidade = document.forms["arrecadaDinheiro"]["quantidade"].value;
	var data = document.forms["arrecadaDinheiro"]["saida"].value;
	
	if  (doador == null || doador == ""){
		
		alert("Doador não foi especificado!");
		return false;
	}

	if (quantidade == null || quantidade == "" || quantidade == 0){
		
		alert("Quantidade não foi especificada!");
		return false;
	}
	
	if (data == null || data == ""){
		
		alert("Data de arrecadação não foi especificada!");
		return false;
	}
	
	return true;
}


