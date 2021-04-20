<?= $this->include('template/home_template/head'); ?>
<!-- Preloader -->
<div class="preloader d-flex align-items-center justify-content-center">
  <div class="lds-ellipsis">
    <div></div>
    <div></div>
    <div></div>
    <div></div>
  </div>
</div>

<?= $this->include('template/home_template/header'); ?>

<?= $this->renderSection('isi'); ?>

<?= $this->include('template/home_template/footer'); ?>

<div class="btn-info-absolute">
  <p>
    <a href="#"><i class="fa fa-facebook"></i></a>
    <a href="#"><i class="fa fa-twitter"></i></a>
    <a href="#"><i class="fa fa-pinterest"></i></a>
    <a href="#"><i class="fa fa-linkedin"></i></a>
    <a href="#"><i class="fa fa-youtube-play"></i></a>
  </p>
</div>

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