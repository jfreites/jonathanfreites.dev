<?php

$input = $_POST['email'];

if (empty($input) || !filter_var($input, FILTER_VALIDATE_EMAIL)) {

    $data = array("error" => true, "message" => "El email parece inválido. Revísalo e intente de nuevo.");

} else {
    $file = 'emails.txt';

    $current = file_get_contents($file);
    $current .= $input . "\n";
    
    file_put_contents($file, $current);

    $data = array("error" => false, "message" => "Gracias por tu interés en PRINTEE!");
}

header("Content-Type: application/json");
echo json_encode($data);
exit();