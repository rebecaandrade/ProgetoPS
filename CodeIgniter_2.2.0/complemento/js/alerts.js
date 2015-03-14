confirmar = function(mensagem,url){
	swal({   
		title: mensagem,
		text: '',
		type: "warning",
		showCancelButton: true,
		confirmButtonText: "sim!",
		cancelButtonText: "Não!",
		closeOnConfirm: false,
		allowOutsideClick : true 
	},
	function(isConfirm){
		if (isConfirm) {
	   		window.location.href = url;
	   	}
	});
}
horario = function(mensagem,subtitulo,url,url_2){
	swal({   
		title: mensagem,
		text: subtitulo,
		type: "info",
		showCancelButton: true,
		confirmButtonText: "Horário da entrevista.",
		cancelButtonText: "Horário das atividades.",
		closeOnConfirm: false, 
		allowOutsideClick : true
	},
	function(isConfirm){
		if (isConfirm) {
	   		window.location.href = url;
	   	}
	   	else{
	   		window.location.href = url_2;
	   	}
	});
}
candidato = function(url,url_2){
	swal({   
		title: 'Quais usuarios deseja visualizar?',
		type: "info",
		showCancelButton: true,
		confirmButtonText: "inscritos no PS corrente",
		cancelButtonText: "todos",
		closeOnConfirm: false, 
		allowOutsideClick : true
	},
	function(isConfirm){
		if (isConfirm) {
	   		window.location.href = url;
	   	}
	   	else{
	   		window.location.href = url_2;
	   	}
	});
}