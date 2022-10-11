<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TRABAJO PRACTICO N°5</title>
</head>
<body>
   
    <?php
    
    print "<h2> Punto 1 </h2>";
    
    $n= ["2", "4", "6", "8","10", "12", "14", "16", "18", "20"];
    
    foreach ($n as $valor){
        print "<p>$valor</p> \n";
    }
    ?>
    <br>
    <hr>
    <br>
    <?php
    
    print "<h2> Punto 2 </h2>";

    $datos = ["Pedro", "Ana", "34", "1"];
    
    
    print   "<prev>\n";
    print_r($datos);
    print   "</prev>\n";
    
    ?>
    <br>
    <hr>
    <br>
    <?php
    
    print "<h2> Punto 3 </h2>";

    $datos = [
        'nombre'=>"Pedro",
        'Apellido'=>"Torres",
        'Dirección'=>"Av. Mayor 3703",
        'Télefono'=>1122334455,

    ];
    ?>

    <br>
    <hr>
    <br>
    <?php
    
    print "<h2> Punto 4  </h2>";

    $ciudades = ["Madrid", "Barcelona", "Londres", "New York", "Los Angeles", "Chicago",];
    
    print   "<prev>\n";
    print_r($ciudades);
    print   "</prev>\n";
    foreach ($ciudades as $hola => $valor){
        print "<p>La ciudad con el indice $hola tiene el nombre $valor.</p>\n";
    }
    
    ?>

    <br>
    <hr>
    <br>
    <?php
    
    print "<h2> Punto 5 </h2>";

    $ciudades = ["Madrid" => "MD", "Barcelona" => "BCL", "Londres"=>"LD", "New York"=>"NY", "Los Angeles"=>"LA", "Chicago"=>"CCG"];
    
    foreach ($ciudades as $siglas => $valor){
        print "<p>El indice $siglas es $valor.</p>\n";
    }
    
    
    ?>
</body>
</html>




















</body>
</html>