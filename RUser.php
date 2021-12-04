<?php
include 'dbshop.php';
$cliente = new Database();
$output = ' ';
$conexion = mysqli_connect("localhost", "root", "", "technoshop");
if (isset($_POST['action'])) {

    $checkun = $_POST['usuario'];

    $sqlun = "SELECT*FROM cliente where usuario='" . $checkun . "'";
    $resun = mysqli_query($conexion, $sqlun);
    if (!empty($resun) && $resun->num_rows > 0) {
        $output = 1;
    } else {
        $checkm = $_POST['correo'];
        $sqlm = "SELECT*FROM cliente where correo='" . $checkm . "'";
        $resm = mysqli_query($conexion, $sqlm);
        if (!empty($resm) && $resm->num_rows > 0) {
            $output = 2;
        } else {

            $nombres = mysqli_real_escape_string($conexion, $_POST['nombres']);
            $apellidos = mysqli_real_escape_string($conexion, $_POST['apellidos']);
            $edad = mysqli_real_escape_string($conexion, $_POST['edad']);
            $sexo = mysqli_real_escape_string($conexion, $_POST['sexo']);
            $usuario = mysqli_real_escape_string($conexion, $_POST['usuario']);
            $correo = mysqli_real_escape_string($conexion, $_POST['correo']);
            $contraseña = mysqli_real_escape_string($conexion, $_POST['contraseña']);
            $telefono = mysqli_real_escape_string($conexion, $_POST['telefono']);
            $direccion = mysqli_real_escape_string($conexion, $_POST['direccion']);
            $res1 = $cliente->createCliente($nombres, $apellidos, $usuario, $contraseña, $edad, $sexo, $correo, $telefono, $direccion);
            if ($res1) {
                $output = 3;
                $arr = array(
                    'properties' => array(
                        array(
                            'property' => 'email',
                            'value' => $correo
                        ),
                        array(
                            'property' => 'firstname',
                            'value' => $nombres
                        ),
                        array(
                            'property' => 'lastname',
                            'value' => $apellidos
                        ),
                        array(
                            'property' => 'phone',
                            'value' => $telefono
                        )
                    )
                );
                $post_json = json_encode($arr);
                $endpoint = 'https://api.hubapi.com/contacts/v1/contact?hapikey=' . '2111baf2-58bf-495d-8783-aad96ab25b1e';
                $ch = @curl_init();
                @curl_setopt($ch, CURLOPT_POST, true);
                @curl_setopt($ch, CURLOPT_POSTFIELDS, $post_json);
                @curl_setopt($ch, CURLOPT_URL, $endpoint);
                @curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
                @curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $response = @curl_exec($ch);
                $status_code = @curl_getinfo($ch, CURLINFO_HTTP_CODE);
                $curl_errors = curl_error($ch);
                @curl_close($ch);
            } else {
                $output = 4;
            }
        }
    }





    echo $output;
}
