<?= $this->include('template/home_template/head'); ?>
<?= $this->renderSection('isi'); ?>

<!-- ##### Footer Area End ##### -->

<!-- ##### All Javascript Script ##### -->

<!-- Popper js -->
<script src="<?= base_url('assets/js/bootstrap/popper.min.js'); ?>"></script>
<!-- Bootstrap js -->
<script src="<?= base_url('assets/js/bootstrap/bootstrap.min.js'); ?>"></script>
<!-- All Plugins js -->
<script src="<?= base_url('assets/js/plugins/plugins.js'); ?>"></script>
<!-- Active js -->
<script src="<?= base_url('assets/js/active.js'); ?>"></script>
<script>
  $(document).ready(function() {

    $(".btn-theme").click(function() {
      $(".body").removeClass("body").addClass("change-body");
      $(".btn-theme").click(function() {
        $(".change-body").removeClass("change-body").addClass("body");
      })
    })
  });
</script>

<?= $this->include('template/home_template/endhead'); ?>