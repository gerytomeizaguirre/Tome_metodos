<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    
    $name = htmlspecialchars(trim($_POST["name"]));
    $lastname = htmlspecialchars(trim($_POST["lastname"]));
    $age = intval($_POST["age"]);
    $email = filter_var($_POST["email"], FILTER_VALIDATE_EMAIL);
    $cel = intval($_POST["cel"]);

    if(empty($name) || trim($lastname)==="" || $age<=0 || empty($email) || $cel<=0){
        echo "<p>Error: Debe ingresar los datos solicitados</p>";

        exit;
    }

    $letNam = strlen($name);
    $letLas = strlen($lastname);
    $namMay = strtoupper($name);
    $ageInv = strrev($age);
    $emaMin = strtolower($email);
    $ranCel = str_shuffle($cel);

    echo "<h1>Registro</h1>";
    echo "<p>Nombre: ".$name." Tiene: ".$letNam." letras</p>";
    echo "<p>Apellido: ".$lastname." Tiene: ".$letLas." letras</p>";
    echo "<p>Edad: ".$age.", Invertida es: ".$ageInv."</p>";
    echo "<p>Nombre en Mayuscula: ".$namMay."</p>";
    echo "<p>Correo: ".$emaMin."</p>";
    echo "<p>Celular: ".$cel." Randomizado: ".$ranCel."</p>";

}
else{
    echo "<h1>Acceso no Permitido</h1>";
}