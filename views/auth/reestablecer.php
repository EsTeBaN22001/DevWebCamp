<main class="auth">
  <h2 class="auth__heading"><?= $titulo ?></h2>
  <p class="auth__texto">Coloca tu nueva contraseña</p>

  <?php require_once __DIR__ . '/../templates/alertas.php' ?>

  <?php if($token_valido): ?>
    <form method="POST" class="formulario">
      <div class="formulario__campo">
        <label for="password" class="formulario__label">Nueva contraseña</label>
        <input 
        type="password"
        class="formulario__input"
        placeholder="Tu contraseña"
        id="password"
        name="password"
        >
      </div>
      <input type="submit" value="Enviar instrucciones" class="formulario__submit">
    </form>
  <?php endif; ?>

  <div class="acciones">
    <a href="/registro" class="acciones__enlace">¿Ya tienes una cuenta? Iniciar sesión</a>
    <a href="/registro" class="acciones__enlace">¿Aún no tienes una cuenta? Obtener una</a>
  </div>
</main>