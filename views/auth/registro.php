<main class="auth">
  <h2 class="auth__heading"><?= $titulo ?></h2>
  <p class="auth__texto">Regístrate en DevWebCamp</p>

  <?php require_once __DIR__ . '/../templates/alertas.php' ?>

  <form method="POST" action="/registro" class="formulario">
    <div class="formulario__campo">
      <label for="nombre" class="formulario__label">Nombre</label>
      <input 
      type="text"
      class="formulario__input"
      placeholder="Tu nombre"
      id="nombre"
      name="nombre"
      value="<?= $usuario->nombre ?>"
      >
    </div>
    <div class="formulario__campo">
      <label for="apellido" class="formulario__label">Apellido</label>
      <input 
      type="text"
      class="formulario__input"
      placeholder="Tu apellido"
      id="apellido"
      name="apellido"
      value="<?= $usuario->apellido ?>"
      >
    </div>
    <div class="formulario__campo">
      <label for="email" class="formulario__label">Email</label>
      <input 
      type="email"
      class="formulario__input"
      placeholder="Tu email"
      id="email"
      name="email"
      value="<?= $usuario->email ?>"
      >
    </div>
    <div class="formulario__campo">
      <label for="password" class="formulario__label">Contraseña</label>
      <input 
      type="password"
      class="formulario__input"
      placeholder="Tu contraseña"
      id="password"
      name="password"
      >
    </div>
    <div class="formulario__campo">
      <label for="password2" class="formulario__label">Repetir contraseña</label>
      <input 
      type="password"
      class="formulario__input"
      placeholder="Repite tu contraseña"
      id="password2"
      name="password2"
      >
    </div>
    <input type="submit" value="Crear cuenta" class="formulario__submit">
  </form>

  <div class="acciones">
    <a href="/login" class="acciones__enlace">Ya tienes una cuenta? Inicia sesión</a>
    <a href="/olvide" class="acciones__enlace">¿Olvidaste tu contraseña?</a>
  </div>
</main>