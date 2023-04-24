<?php
if($_SERVER["REQUEST_METHOD"]== "POST"){

    $nombre = isset($_POST["nombre"]) ? $_POST["nombre"] : "";
    $edad = isset($_POST["edad"]) ? $_POST["edad"] : "";
    

    echo "Mi nombre es: " . $nombre .  " y mi edad es: " . $edad;

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Formulario de prueba</h1>
    <form action = "ejercicio3.php"  method="post">
        <input type ="text" name ="nombre" required><br><br>>
        <button type="submit">Enviar</button>
        <form action=""></form>
</body>
</html>

