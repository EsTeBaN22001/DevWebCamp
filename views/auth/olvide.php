<main class="auth">
  <h2 class="auth__heading"><?= $titulo ?></h2>
  <p class="auth__texto">Recupera tu acceso a DevWebCamp</p>

  <?php require_once __DIR__ . '/../templates/alertas.php' ?>

  <form method="POST" class="formulario">
    <div class="formulario__campo">
      <label for="email" class="formulario__label">Email</label>
      <input 
      type="email"
      class="formulario__input"
      placeholder="Tu email"
      id="email"
      name="email"
      >
    </div>
    <input type="submit" value="Enviar instrucciones" class="formulario__submit">
  </form>

  <div class="acciones">
    <a href="/registro" class="acciones__enlace">¿Ya tienes una cuenta? Iniciar sesión</a>
    <a href="/registro" class="acciones__enlace">¿Aún no tienes una cuenta? Obtener una</a>
  </div>
</main>