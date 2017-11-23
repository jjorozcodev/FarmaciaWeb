   

    $('#criterio').keyup(function () {
        var rex = new RegExp($(this).val(), 'i');
        $('.contenidoTabla tr').hide();
        $('.contenidoTabla tr').filter(function () {
            return rex.test($(this).text());
        }).show();

    });
   
   
	$('#agregar').click(function() {
		$('#modalAgregar').show();
	});
	
	$('#cerrarAgregar').click(function() {
		$('#modalAgregar').hide();
    });
    
    $('#cerrarEditar').click(function() {
		$('#modalEditar').hide();
    });
  