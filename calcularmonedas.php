<?php
if (isset($_POST["numero"])) {
    $numero = $_POST["numero"];
    include('./api_request.php');
    $dolar_oficial = number_format($numero / $data['oficial']['value_buy'],2);
    $dolar_blue = number_format($numero / $data['blue']['value_buy'],2);
    $euro_oficial = number_format($numero / $data['oficial_euro']['value_buy'],2);
    $euro_blue = number_format($numero / $data['blue_euro']['value_buy'],2);
    echo "<h1>Pesos : $ $numero</h1>";
    echo "<div class='mb-6 bg-blue-800 p-6  text-2xl text-white flex flex-col justify-around w-96 h-96  p-1.5 rounded-2xl'>";
    
    echo "<div class='flex  justify-between'><h1>Dolar Oficial:</h1><h1> $ $dolar_oficial</h1></div>";
    echo "<div class='flex justify-between'><h1>Dolar Blue:</h1><h1> $ $dolar_blue</h1></div>";
    echo "<div class='flex justify-between'><h1>Euro Oficial:</h1><h1> $ $euro_oficial</h1></div>";
    echo "<div class='flex justify-between'><h1>Euro Blue:</h1><h1> $ $euro_blue</h1></div>";

    echo "</div>";
}
?>




