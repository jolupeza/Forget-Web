<main class="Content Content-form">
  <p class="text-center Text-resalt text-uppercase">Deja tus datos, y pregúntale a tus amigos que les gustaría recibir. ¡Ayúdanos a eliminar los malos regalos!</p>

  <?php if (validation_errors()) : ?>
    <div class="alert alert-danger text-center" role="alert">
      <?php echo validation_errors(); ?>
    </div>
  <?php endif; ?>

  <?php if ($this->session->flashdata('success')) : ?>
    <div class="alert alert-success text-center" role="alert">
      <p><?php echo $this->session->flashdata('success'); ?></p>
    </div>
  <?php endif; ?>

  <?php echo form_open('', ['class' => 'Form']); ?>
    <div class="form-group">
      <label for="name" class="sr-only">Nombre</label>
      <?php
        $attrs = array(
          'name' => 'name',
          'id' => 'name',
          'placeholder' => 'Nombre',
          'class' => 'form-control Form-input',
          'value' => set_value('name'),
          'autocomplete' => 'off'
        );
      ?>
      <?php echo form_input($attrs); ?>
    </div>
    <div class="form-group">
      <label for="email" class="sr-only">Correo</label>
      <?php
        $attrs = array(
          'name' => 'email',
          'id' => 'email',
          'placeholder' => 'Correo',
          'class' => 'form-control Form-input',
          'value' => set_value('email'),
          'type' => 'email',
          'autocomplete' => 'off'
        );
      ?>
      <?php echo form_input($attrs); ?>
    </div>
    <div class="form-group">
      <label for="tel" class="sr-only">Teléfono</label>
      <?php
        $attrs = array(
          'name' => 'phone',
          'id' => 'phone',
          'placeholder' => 'Teléfono',
          'class' => 'form-control Form-input',
          'value' => set_value('phone'),
          'autocomplete' => 'off'
        );
      ?>
      <?php echo form_input($attrs); ?>
    </div>

    <div class="text-center">
      <?php echo form_submit('submit', 'Registrar', 'class="Button Button-normal text-uppercase"'); ?>
    </div>
  <?php echo form_close(); ?>

  <hr class="Content-hr" />

  <section class="Content-buttons">
    <h3 class="text-uppercase Text-red text-center Content-subtitle">Elige por donde preguntarle a tu amigo(a)</h3>
    <div class="text-center">
      <a data-method="facebook" class="Social Social-fb text-hide Sh-button" href="http://www.facebook.com/sharer.php?u=http://watson.pe" rel="nofollow">Facebook</a>
      <a data-method="twitter" href="http://twitter.com/share?text=Forget%20Watson&amp;url=http%3A%2F%2Fwatson.com%2F&amp;via=watson" class="Social Social-twitter text-hide Sh-button" rel="nofollow">Twitter</a>
      <a data-method="whatsapp" href="" class="Social Social-whatsapp text-hide Sh-button">Whatsapp</a>
      <a data-method="email" href="" class="Social Social-email text-hide Sh-button">Email</a>
      <a data-method="phone" href="" class="Social Social-phone text-hide Sh-button">Phone</a>
    </div>
  </section><!-- end Content-buttons -->
</main><!-- end Content -->
