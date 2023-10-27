<?php
include_once "matematicas.php";//da warning, include para si da error

if($_SERVER['REQUEST_METHOD']== 'POST'){//Lo ultimo sirve para que salga todo lo siguiente al enviar formulario al ser metodo post
    if(isset($_POST["secu"]) && !empty($_POST["secu"])){
        $a = $_POST["coef1"];
        $b = $_POST["coef2"];
        $c = $_POST["coef3"];}
        $soluciones = array();
    
        $soluciones = calcularSolucion($a,$b,$c);
        
        if(isset($soluciones) && !empty($soluciones)){
            echo "<p>Soluciones son :</p> " . $soluciones[0] . " y " .$soluciones[1];
        }else{
            echo "No hay solucion";
        }
    
        
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Ecuaciones 2o grado</h2>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?> method="post">
        <input type="number" name="coef1" id="coef1">x<sup>2 +- 
        <input type="number" name="coef2" id="coef1">x +-
        <input type="number" name="coef3" id="coef1">
        <br><br>
        <input type="submit" name="secu" value="Enviar">

    </form>

</body>

</html>