  <!-- Modal -->
  <div class="modal fade Modal" id="md-message" tabindex="-1" role="dialog" aria-labelledby="md-message-label">
    <div class="modal-dialog Modal-dialog" role="document">
      <div class="modal-content Modal-content">
        <!--<div class="modal-header Modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="md-message-label">Modal title</h4>
        </div>-->
        <div class="modal-body Modal-body">
          <p class="text-center text-uppercase"><span>¡Muy pronto</span> habilitaremos esta opción!</p>
        </div>
        <!--<div class="modal-footer Modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>-->
      </div>
    </div>
  </div><!-- end Modal -->

  <footer class="Footer">
    <hr class="Footer-borderTop" />
    <section class="container">
      <p class="Footer-copy">Copyright&copy; <?php echo date('Y') ?>. Derechos Reservados por <a href="http://watson.pe" class="text-uppercase" target="_blank">Watson</a></p>
    </section>
  </footer>

  <script>
      _root_ = '<?php echo site_url(); ?>'
  </script>
  <script src="<?php echo site_url('js/vendor.min.js') ?>"></script>
  <script src="<?php echo site_url('js/app.min.js') ?>"></script>
</body>
</html>
