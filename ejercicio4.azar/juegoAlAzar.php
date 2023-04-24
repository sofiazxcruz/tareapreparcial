<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>La chica</title>
</head>
<body>
    <h1>Tabla de apuesta</h1>
    <table>
		<thead>
			<tr>
				<th>Cantidad</th>
				<th>Precio</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>$1</td>
				<td>$70</td>
			</tr>
			<tr>
				<td>$2</td>
				<td>$140</td>
			</tr>
			<tr>
				<td>$3</td>
				<td>$210</td>
			</tr>
			<tr>
				<td>$4</td>
				<td>$280</td>
			</tr>
			<tr>
				<td>$5</td>
				<td>$350</td>
			</tr>
			<tr>
				<td>$6</td>
				<td>$420</td>
			</tr>
			<tr>
				<td>$7</td>
				<td>$490</td>
			</tr>
			<tr>
				<td>$8</td>
				<td>$560</td>
			</tr>
			<tr>
				<td>$9</td>
				<td>$630</td>
			</tr>
			<tr>
				<td>$10</td>
				<td>$700</td>
			</tr>
		</tbody>
	</table>
    <form action="" method = "POST">
        <input type="number" placeholder="Numero con el que jugaras" name="numero_seleccionado" min="0" max="100" class = "inputs"><br>
        <input type="number" placeholder="Cuanta cantidad vas a apostar" name="cantidad_seleccionada" min="0" max="10" class = "inputs">
        <button type="submit">Jugar</button>
    </form>
    <?php

        class Suerte{

            // creando atributos
            public $numeroJugando;
            public $cantidadJugando;

            // creando constructor
            public function __construct($numeroJugando,$cantidadJugando){
                $this -> numeroJugando = $numeroJugando;
                $this -> cantidadJugando = $cantidadJugando;
            }

            //metodo
            public function jugar(){
                
                $numeroAzar = rand(0,100);
            
                $tablaPrecios = array(
                    1 => 70,
                    2 => 140,
                    3 => 210,
                    4 => 280,
                    5 => 350,
                    6 => 420,
                    7 => 490,
                    8 => 560,
                    9 => 630,
                    10 => 700
                );

                $premio = $tablaPrecios[$this -> cantidadJugando];


                if($this -> numeroJugando  == $numeroAzar){
                    echo "HAZ GANADO {$premio} !!! ";
                }
                else{
                    echo "HAZ PERDIDO $ {$this -> cantidadJugando} suerte a la proxima";
                }
            }
        }



    if(isset($_POST['numero_seleccionado'], $_POST['cantidad_seleccionada'])){
        $luck = new Suerte($_POST['numero_seleccionado'], $_POST['cantidad_seleccionada']);
        $luck -> jugar();
        }
    ?>

</body>
</html>