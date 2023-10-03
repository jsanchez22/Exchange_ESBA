<?php include('./layout/header.php'); ?>
<H1 class=" text-2xl bg-red-800 text-white p-1 text-center mb-3">CONTACTOS </H1>
<div class="grid grid-cols-1 md:grid-cols-3 gap-4 flex mt-10">
            <?php
            $contactos = [
                ["Jeanfranco", "Sanchez", "sanchez.franco22@gmail.com", "11-3122-5111"],
                ["jonathan", "Mamani", "correo2@example.com", "987-654-3210"],
                ["Jael", "Mune", "correo3@example.com", "555-555-5555"],
            ];

            foreach ($contactos as $contacto) {
                echo '<div class="bg-gray-200 p-4 rounded-lg shadow-md text-center py-10 mx-1" >';
                echo '<h2 class="text-lg font-semibold mb-2">' . $contacto[0] . ' ' . $contacto[1] . '</h2>';
                echo '<p><strong>Correo:</strong> ' . $contacto[2] . '</p>';
                echo '<p><strong>Celular:</strong> ' . $contacto[3] . '</p>';
                echo '</div>';
            }
            ?>
        </div>
 
<?php include('./layout/footer.php'); ?>


