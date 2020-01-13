<?php


$transp=array("Carro", "Moto", "Bicicleta", "Ônibus","Avião", "Navio");

foreach($transp as $veiculo){
    echo"$veiculo<br/>";
    //if($veiculo=="Bicicleta"){
   // break;
    //}
}

echo"<br/><hr/>";


foreach($transp as $veiculo)
{
    if ($veiculo=="Bicicleta")
        echo"<br/>Bicicleta está na lista de veículos<br/>";

    if($veiculo=="Trem")
    
    echo "<br/>Trem está na lista de veículos<br/>";

    else

    echo "<br/>Trem não está na lista<br/>";
}




?>