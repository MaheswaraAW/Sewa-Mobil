<section class="section" style="position:center; margin-top: 100px;">
  <div class="container mt-2">
    <div class="row">
      <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
        <div class="login-brand">
              <!-- <img src="<?//=base_url()?>/assets/assets_stisla/assets/img/logo.png" alt="logo" width="100" class="shadow-light rounded-circle"> -->
        </div>

        <div class="card card-primary" style="border: 1px solid grey">
          <div class="card-header"><h4 style="text-align:center;">Login</h4></div>

          <?php
            if(!empty(session()->getFlashdata('message'))): ?>
            <div class="alert alert-info" style="text-align:center">
              <?= session()->getFlashdata('message') ?>
            </div>
          <?php endif; ?>

          <div class="card-body">
            <form method="POST" action="<?=base_url('CLogin/login')?>" id="loginform" class="needs-validation" novalidate="">
              <div class="form-group mt-2">
                <label for="email">Email</label>
                <input id="email" type="email" class="form-control" name="email" tabindex="1" required autofocus>
                <div class="invalid-feedback">
                  Masukan Email Dengan Benar
                </div>
              </div>

              <div class="form-group mt-2">
                <div class="d-block">
                  <label for="password" class="control-label">Password</label>
                </div>
                <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                <div class="invalid-feedback">
                  Password masih kosong
                </div>
              </div>

              <div class="form-group">
                <button name="login" type="submit" class="btn btn-primary btn-lg btn-block" style="margin-top:20px; width:100%" tabindex="4">
                  Login
                </button>
              </div>
            </form>
            <p style="margin-top:20px;">Belum punya akun?<a href="<?=base_url('daftar')?>" style="text-decoration: none"><strong> Daftar disini</strong></a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>