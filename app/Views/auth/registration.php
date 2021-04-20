<?= $this->extend('template/home_template/main'); ?>
<?= $this->section('isi'); ?>
<div class="registration-area section-padding-80">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-md-6">
        <div class="login-content">
          <!-- Section Title -->
          <div class="section-heading">
            <h4>Daftar Akun</h4>
            <div class="line"></div>
          </div>

          <form>
            <div class="form-row">
              <div class="col-md-6 mb-3">
                <label for="">First name</label>
                <input type="text" class="form-control" id="" placeholder="First name" value="Mark" required>
              </div>
              <div class="col-md-6 mb-3">
                <label for="validationDefault02">Last name</label>
                <input type="text" class="form-control" id="validationDefault02" placeholder="Last name" value="Otto" required>
              </div>
            </div>
            <div class="form-row">
              <div class="col-md-6 mb-3">
                <label for="">Email</label>
                <input type="email" class="form-control" id="" placeholder="Email" required>
              </div>
              <div class="col-md-3 mb-3">
                <label for="">Password</label>
                <input type="text" class="form-control" id="" placeholder="Password" required>
              </div>
              <div class="col-md-3 mb-3">
                <label for=""> Match Password</label>
                <input type="text" class="form-control" id="" placeholder="Match Password" required>
              </div>
            </div>
            <div class="form-group">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="" required>
                <label class="form-check-label" for="">
                  Agree to terms and conditions
                </label>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 col-sm-12">
                <button class="btn log-in-btn" type="submit">Send</button> <br>
                <p style="text-align:center;">Sudah Punya Akun Login <a href="<?= base_url('auth/registration'); ?>" style="text-decoration: none; color: aliceblue; font-weight: bolder; font-style: italic;">Disini</a>
                </p>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>