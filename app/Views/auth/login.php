<?= $this->extend('template/home_template/main'); ?>
<?= $this->section('isi'); ?>
<div class="vizew-login-area section-padding-80">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-md-6">
        <div class="login-content">
          <!-- Section Title -->
          <div class="section-heading">
            <h4>Masuk Akun</h4>
            <div class="line"></div>
          </div>

          <form action="index.html" method="post">
            <div class="form-group">
              <input type="email" class="form-control" id="" placeholder="Masukan Username atau Email">
            </div>
            <div class="form-group">
              <input type="password" class="form-control" id="" placeholder="Password">
            </div>
            <div class="form-group">
              <div class="custom-control custom-checkbox mr-sm-2">
                <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
                <label class="custom-control-label" for="customControlAutosizing">Remember
                  me</label>
              </div>
            </div>
            <button type="submit" class="btn log-in-btn w-100 mt-30">Login</button> <br> <br>
            <p style="text-align:center;">Belum Punya Akun Daftar <a href="<?= base_url('auth/registration'); ?>" style="text-decoration: none; color: aliceblue; font-weight: bolder; font-style: italic;">Disini</a>
            </p>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>