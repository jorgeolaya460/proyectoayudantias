<?php
include 'cone.php';
error_reporting(0);
$cedula =$_POST["cedula_validar"];


$query = "SELECT * FROM estudiante WHERE cedula = '$cedula'";
	

    $resultado = $conexion->query($query);

  	$si_existe = $resultado->num_rows;
	
    if ($si_existe == 1) {
        ?>     
        <script> 
        $('#mostrarboton').hide();
        alert ("El estudiante ya está registrado.");
		</script>
        <?php
    } else if ($si_existe == 0) {
    	?>
    	<script>
    	 $('#mostrarboton').show();
    	 </script> <?php
    
}