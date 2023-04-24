<?php
class Imagenes {
    public function imagen()
    {      
        echo '<img src="img/gato.jpg"  width="500" height="600">';
    }
}
$imagen = new Imagenes();
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

<form action="Ejercicio3.php" method="post">
       <input type="number" name="numero" required> <br> <br>
       
       <button type="submit"> Enviar</button>
    </form>
    <?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
   for($i = 1; $i <= $_POST["numero"]; $i++){
    $imagen->imagen();
   }
   
   
   }
   
?>

</body>
</html>