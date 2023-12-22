<h1 class="nombre-pagina">login</h1>
<p class="descripcion-pagina">Inicia sesión con tus datos</p>

<?php 
    include_once __DIR__ . "/../templades/alertas.php";
?>

<form action="/" class="formulario" method="POST">
    <div class="campo">
        <label for="email">Correo</label>
        <input 
                type="email"
                id="email"
                placeholder="Tu Correo"
                name="email"
        />
    </div>
    <div class="campo">
        <label for="password">Contraseña</label>
        <input 
                type="password"
                id="password"
                placeholder="Tu Contraseña"
                name="password"
        />
    </div>
    <input type="submit" class="boton" value="Iniciar Sesión">
</form>

<div class="acciones">
    <a href="/crear-cuenta">¿Áun no tienes una cuenta? Crea una</a>
    <a href="/olvide">¿Olvide mi Contraseña?</a>
</div>