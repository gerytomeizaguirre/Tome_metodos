<?php

if (isset($_GET["search"]) && !empty($_GET["search"])){
    $search = htmlspecialchars(trim($_GET["search"]));
    $pay = htmlspecialchars(trim($_GET["pay"]));

    $cantSea = strlen($search);
    $minSea = strtolower($search);
    $payMay = strtoupper($pay);

    echo"<h1>Busqueda</h1>";
    echo"<p>Busco: ".$search." Tipo: ".$payMay."</p>";
    echo"<p>".$search." tiene ".$cantSea." de letras</p>";
    echo"<p>En minuscula: ".$minSea."</p>";

    if($payMay=="EFECTIVO"){
        echo"<p>Sin cargo adicional</p>";
    }elseif($payMay=="TRANSFERENCIA"){
        echo"<p>Cargo adicional del 10%</p>";
    }else{
        echo"<p>Cargo adicional del 15%</p>";
    }

}else{
    echo"<h1>Debe ingresar lo solicitado <a href='buscar.html'>Volver</a></h1>";
}