function validar_cedula() {
	var cedula_validar = $("#cedula_validar").val();
	 $.ajax({
        type: "POST",
        url: "validar_cedula.php",
        data: {"cedula_validar": cedula_validar}
    }).done(function (respuesta) {
            $("#cedulasiexiste").html(respuesta);
        });

}