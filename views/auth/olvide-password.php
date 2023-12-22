<h1 class="nombre-pagina">Olvidaste tu Contraseña</h1>
<p class="descripcion-pagina">Restablece tu contraseña escribiendo tu Correo a continuacion</p>

<?php 
    include_once __DIR__ . "/../templades/alertas.php";
?>

<form action="/olvide" class="formulario" method="POST">
    <div class="campo">
        <label for="email">Correo</label>
        <input 
                type="email"
                id="email"
                placeholder="Tu Correo"
                name="email"
        />
    </div>
    <input type="submit" class="boton" value="Enviar Instrucciones">
</form>

<div class="acciones">
    <a href="/">¿Ya tienes una cuenta? Inicia Sesión</a>
    <a href="/crear-cuenta">¿Áun no tienes una cuenta? Crea una</a>
</div>