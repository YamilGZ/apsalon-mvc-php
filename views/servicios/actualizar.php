<h1 class="nombre-pagina">Actualizar Servicio</h1>
<p class="descripcion-pagina">Modifica los Valores del Formulario</p>

<?php
    include_once __DIR__ . '/../templades/barra.php';
    include_once __DIR__ . '/../templades/alertas.php';
?>

<form class="formulario" method="POST">

    <?php
        include_once __DIR__ . '/formulario.php';
    ?>

    <input type="submit" class="boton" value="Actualizar Servicio">
</form>