<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    
    $name = htmlspecialchars(trim($_POST["name"]));
    $lastname = htmlspecialchars(trim($_POST["lastname"]));
    $age = intval($_POST["age"]);

    if(empty($name) || empty($lastname) || $age<=0){
        echo "<p>Error: Debe ingresar los datos solicitados</p>";

        exit;
    }

    $letNam = strlen($name);
    $letLas = strlen($lastname);
    $namMay = strtoupper($name);
    $ageInv = strrev($age);

    echo "<h1>Registro</h1>";
    echo "<p>Nombre: ".$name." Tiene: ".$letNam." letras</p>";
    echo "<p>Apellido: ".$lastname." Tiene: ".$letLas." letras</p>";
    echo "<p>Edad: ".$age.", Invertida es: ".$ageInv."</p>";
    echo "<p>Nombre en Mayuscula: ".$namMay."</p>";

}
else{
    echo "<h1>Acceso no Permitido</h1>";
}