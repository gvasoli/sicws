

$(document).ready(function() {
	$('#btnContact').click(function(event){

		event.preventDefault();

		if( $('#formContact').smkValidate() ){

			$.ajax({
				data: $('#formContact').serialize(),
				type: 'POST',
				dataType: 'JSON',
				url: 'contact.php',
				success: function(data){

					if(data.result == true){

						$.smkAlert({
					    text: 'Gracias por tu mensaje, en breve te contactaremos.',
					    type: 'success',
					    position:'bottom-right'
					  });
						$('#formContact').smkClear();
					}else{
						$.smkAlert({
					    text: 'Error al enviar la informaci�n, int�ntalo m�s tarde.',
					    type: 'danger',
					    position:'bottom-right'
					  });
					}
				}
			});

		}
	});
});
