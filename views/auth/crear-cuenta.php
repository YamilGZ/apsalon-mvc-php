<h1 class="nombre-pagina">Crear Cuenta</h1>
<p class="descripcion-pagina">Llena el siguiente formulario para crear una cuenta</p>

<?php 
    include_once __DIR__ . "/../templades/alertas.php";
?>

<form action="/crear-cuenta" class="formulario" method="POST">
<div class="campo">
        <label for="nombre">Nombre</label>
        <input 
                type="text"
                id="nombre"
                placeholder="Tu Nombre"
                name="nombre"
                value="<?php echo s($usuario->nombre); ?>"
                required
        />
    </div>
    <div class="campo">
        <label for="apellido">Apellido</label>
        <input 
                type="text"
                id="apellido"
                placeholder="Tu Apellido"
                name="apellido"
                value="<?php echo s($usuario->apellido); ?>"
                required
        />
    </div>
    <div class="campo">
        <label for="telefono">Telefono</label>
        <input 
                type="tel"
                id="telefono"
                placeholder="Tu Telefono"
                name="telefono"
                value="<?php echo s($usuario->telefono); ?>"
                required
        />
    </div>
    <div class="campo">
        <label for="email">Correo</label>
        <input 
                type="email"
                id="email"
                placeholder="Tu Correo"
                name="email"
                value="<?php echo s($usuario->email); ?>"
                required
        />
    </div>
    <div class="campo">
        <label for="password">Contraseña</label>
        <input 
                type="password"
                id="password"
                placeholder="Tu Contraseña"
                name="password"
                required
        />
    </div>
    <input type="submit" class="boton" value="Crear Cuenta">
</form>

<div class="acciones">
    <a href="/">¿Ya tienes una cuenta? Inicia Sesión</a>
    <a href="/olvide">¿Olvide mi Contraseña?</a>
</div>