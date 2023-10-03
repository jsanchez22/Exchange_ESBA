<?php include('./layout/header.php'); ?>
<H1 class="text-2xl bg-red-800 text-white p-1 text-center">COTIZACIONES DE MONEDAS EXTRANJERAS</H1>
<div class= "container flex h-4/6 justify-around place-items-center ">

    <?php
    include('./api_request.php');
    if ($data && isset($data['oficial'], $data['blue'])) {
        
        class Moneda {
            public $moneda;
            public $name;
        
            public function __construct($moneda, $name) {
                $this->moneda = $moneda;
                $this->name = $name;
            }
        }
        
        $indice_monedas = array(
            new Moneda('oficial', 'Dolar'),
            new Moneda('blue', 'Dolar Blue'),
            new Moneda('oficial_euro', 'Euro'),
            new Moneda('blue_euro', 'Euro Blue')
        );
        foreach ($indice_monedas as $moneda) {
            echo '<div  class=" flex flex-col w-64 h-64  p-3 rounded-2xl text-white  bg-blue-800 transition-transform transform hover:scale-110 " >';
            echo '<h1 class=" text-center text-2xl mt-3">'. $moneda->name .'</h1>';
            echo '<h2 class=" text-center  text-xl mt-3">Valor promedio: $ ' . $data[$moneda->moneda]['value_avg'] . '</h2>';
            echo '<h2 class=" text-center text-xl mt-3 bg-green-500">Valor de venta: $' . $data[$moneda->moneda]['value_sell'] . '</h2>';
            echo '<h2 class=" text-center text-xl mt-3 bg-red-500">Valor de compra: $' . $data[$moneda->moneda]['value_buy'] . '</h2>';
            echo '</div>';
        }
    } else {
        echo '<li>No se pudieron obtener los datos de la API.</li>';
    }
    ?>
</div>
<?php include('./layout/footer.php'); ?>