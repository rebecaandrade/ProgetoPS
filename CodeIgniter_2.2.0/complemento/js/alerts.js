confirmar = function(mensagem,subtitulo){
	swal({   
		title: mensagem,
		text: subtitulo,
		type: "warning",
		showCancelButton: true,
		confirmButtonColor: "#DD6B55",
		confirmButtonText: "sim!",
		cancelButtonText: "Não!",
		closeOnConfirm: false,
		allowOutsideClick : true 
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