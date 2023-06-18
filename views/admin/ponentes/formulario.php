<fieldset class="formulario__fieldset">

  <legend class="formulario__legend">Información personal</legend>

  <div class="formulario__campo">
    <label for="nombre" class="formulario__label">Nombre</label>
    <input 
      type="text"
      class="formulario__input"
      id="nombre"
      name="nombre"
      placeholder="Nombre ponente"
      value="<?= $ponente->nombre ?? '' ?>"
    >
  </div>

  <div class="formulario__campo">
    <label for="apellido" class="formulario__label">Apellido</label>
    <input 
      type="text"
      class="formulario__input"
      id="apellido"
      name="apellido"
      placeholder="Apellido ponente"
      value="<?= $ponente->apellido ?? '' ?>"
    >
  </div>

  <div class="formulario__campo">
    <label for="ciudad" class="formulario__label">Ciudad</label>
    <input 
      type="text"
      class="formulario__input"
      id="ciudad"
      name="ciudad"
      placeholder="Ciudad ponente"
      value="<?= $ponente->ciudad ?? '' ?>"
    >
  </div>

  <div class="formulario__campo">
    <label for="ciudad" class="formulario__label">Imagen</label>
    <input 
      type="file"
      class="formulario__input formulario__input--file"
      id="imagen"
      name="imagen"
    >
  </div>

</fieldset>

<fieldset class="formulario__fieldset">

  <legend class="formulario__legend">Información extra</legend>

  <div class="formulario__campo">
    <label for="tags_input" class="formulario__label">Áreas de experiencia (separadas por coma)</label>
    <input 
      type="text"
      class="formulario__input"
      id="tags_input"
      placeholder="Ej: Node.js, PHP, CSS, Laravel, UX / UI"
    >

    <div id="tags" class="formulario__listado"></div>
    <input type="hidden" name="tags" value="<?= $ponente->tags ?? '' ?>">
  </div>

</fieldset>

<fieldset class="formulario__fieldset">

  <legend class="formulario__legend">Redes sociales</legend>

  <div class="formulario__campo">
    <div class="formulario__contenedor-icono">
      <div class="formulario__icono">
        <i class="fa-brands fa-facebook"></i>
      </div>
      <input 
        type="text"
        class="formulario__input--redes-sociales"
        name="redes[facebook]"
        id="tags_input"
        placeholder="Facebook"
        value="<?= $ponente->facebook ?? '' ?>"
      >
    </div>
  </div>

  <div class="formulario__campo">
    <div class="formulario__contenedor-icono">
      <div class="formulario__icono">
        <i class="fa-brands fa-twitter"></i>
      </div>
      <input 
        type="text"
        class="formulario__input--redes-sociales"
        name="redes[twitter]"
        id="tags_input"
        placeholder="Twitter"
        value="<?= $ponente->twitter ?? '' ?>"
      >
    </div>
  </div>

  <div class="formulario__campo">
    <div class="formulario__contenedor-icono">
      <div class="formulario__icono">
        <i class="fa-brands fa-youtube"></i>
      </div>
      <input 
        type="text"
        class="formulario__input--redes-sociales"
        name="redes[youtube]"
        id="tags_input"
        placeholder="Youtube"
        value="<?= $ponente->youtube ?? '' ?>"
      >
    </div>
  </div>
  
  <div class="formulario__campo">
    <div class="formulario__contenedor-icono">
      <div class="formulario__icono">
        <i class="fa-brands fa-instagram"></i>
      </div>
      <input 
        type="text"
        class="formulario__input--redes-sociales"
        name="redes[instagram]"
        id="tags_input"
        placeholder="Instagram"
        value="<?= $ponente->instagram ?? '' ?>"
      >
    </div>
  </div>
  
  <div class="formulario__campo">
    <div class="formulario__contenedor-icono">
      <div class="formulario__icono">
        <i class="fa-brands fa-tiktok"></i>
      </div>
      <input 
        type="text"
        class="formulario__input--redes-sociales"
        name="redes[tiktok]"
        id="tags_input"
        placeholder="Tiktok"
        value="<?= $ponente->tiktok ?? '' ?>"
      >
    </div>
  </div>
  
  <div class="formulario__campo">
    <div class="formulario__contenedor-icono">
      <div class="formulario__icono">
        <i class="fa-brands fa-github"></i>
      </div>
      <input 
        type="text"
        class="formulario__input--redes-sociales"
        name="redes[github]"
        id="tags_input"
        placeholder="Github"
        value="<?= $ponente->github ?? '' ?>"
      >
    </div>
  </div>

</fieldset>