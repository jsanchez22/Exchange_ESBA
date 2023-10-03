<?php include('./layout/header.php'); ?>
<H1 class=" text-2xl bg-red-800 text-white p-1 text-center">CONVERSOR DE PESOS A MONEDAS EXTRANJERAS</H1>
<div class= "container flex flex-col h-4/6 place-items-center mt-1.5">
    <div>
        
    </div>
    <form method="POST" >
        <label for="valor" class="m-1">Ingrese un valor:</label>
        <input type="text" id="numero" name="numero" placeholder="Ingrese pesos" class="m-3 p-1 bg-green-100">
        
        <input type="submit" value="Convertir" class=" p-2 rounded-xl transition-transform hover:bg-yellow-500"">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST["numero"];

        include ('calcularmonedas.php');
    }
    ?>
</div>
<?php include('./layout/footer.php'); ?>


