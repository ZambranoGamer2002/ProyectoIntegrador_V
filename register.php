<?php
	if($_SERVER["REQUEST_METHOD"] == "POST"){

        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://cevicherias.informaticapp.com/personas',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_POSTFIELDS => 
            'per_nombres='.$_POST["per_nombres"].
            '&per_apellidos='.$_POST["per_apellidos"].
            '&per_telefono='.$_POST["per_telefono"].
            '&per_dni='.$_POST["per_dni"].
            '&per_correo='.$_POST["per_correo"],
          CURLOPT_HTTPHEADER => array(
            'Content-Type: application/x-www-form-urlencoded',
            'Authorization: Basic YTJhYTA3YWRmaGRmcmV4ZmhnZGZoZGZlcnR0Z2VWYVRVZXpBOFQuSEYza25WTjZLUTVMSzBSc1Nwc0tPOm8yYW8wN29kZmhkZnJleGZoZ2RmaGRmZXJ0dGdlSGdrN1Q1dWswNGhrWFN1MG9GYmdBZFZ3dkxSbWt2dQ=='           ),
        ));
        
		$response = curl_exec($curl);

		curl_close($curl);
		$data = json_decode($response, true);

        $idpersona = $data["per_id"];
        $curl = curl_init();

		curl_setopt_array($curl, array(
		CURLOPT_URL => 'https://cevicherias.informaticapp.com/reservas',
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => '',
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 0,
		CURLOPT_FOLLOWLOCATION => true,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => 'POST',
		CURLOPT_POSTFIELDS =>
            'per_id='.$idpersona.
            '&res_fecha_pedido='.$_POST["res_fecha_pedido"].
            '&res_fecha_reserva='.$_POST["res_fecha_reserva"].
            '&res_hora='.$_POST["res_hora"],
		CURLOPT_HTTPHEADER => array(
			'Content-Type: application/x-www-form-urlencoded',
            'Authorization: Basic YTJhYTA3YWRmaGRmcmV4ZmhnZGZoZGZlcnR0Z2VWYVRVZXpBOFQuSEYza25WTjZLUTVMSzBSc1Nwc0tPOm8yYW8wN29kZmhkZnJleGZoZ2RmaGRmZXJ0dGdlSGdrN1Q1dWswNGhrWFN1MG9GYmdBZFZ3dkxSbWt2dQ=='            ),
        ));

		$response = curl_exec($curl);

		curl_close($curl);
		$data = json_decode($response, true);
		header("Location: index.php");

	}
    session_start();
    $valorGlobal = $_SESSION['mi_variable_global'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cevicheria</title>
    <link rel="stylesheet" href="styleregister.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>

    <div class="form-content">
        <form>
            <h2>Reserva tu Pedido</h2>
    
            <label for="username">Nombres</label>
            <input type="text" id="username" name="per_nombres" class="form-control" aria-describedby="emailHelp">

            <label for="email">Apellidos</label>
            <input type="text" id="email" name="per_apellidos" class="form-control" aria-describedby="emailHelp">
    
            <label for="password">Telefono</label>
            <input type="number" id="telefono" name="per_telefono" class="form-control" aria-describedby="emailHelp">
            
            <label for="password">DNI</label>
            <input type="number" id="dni" name="per_dni" class="form-control" aria-describedby="emailHelp">

            <label for="password">Correo</label>
            <input type="hidden" value="<?php echo date('Y-m-d'); ?>" name="res_fecha_pedido" class="form-control" aria-describedby="emailHelp">
            <input type="text" name="per_correo" class="form-control" aria-describedby="emailHelp">
            
            <label for="password">Fecha de la Reserva</label>
            <input type="date" name="res_fecha_reserva" class="form-control" aria-describedby="emailHelp">

            <label for="password">Hora</label>
            <input type="time" name="res_hora" class="form-control" aria-describedby="emailHelp">

  
            <div class="btn-field">
            </div>
               
            <input type="submit" class="btn-ctr" value="Register">
            <a href="index.php" class="btn btn-danger">Cancelar</a>

            
        </form>

    </div>


    <script src="script/scriptregister.js"></script>
</body>
</html>