
    <div class="container">
    <?php //echo CI_VERSION; ?>
      <!-- Outer Row -->
      <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

          <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
              <!-- Nested Row within Card Body -->
              <div class="row">
                <div class="col-lg-6 d-none d-lg-block bg-login-image" style="background: url(<?=base_url();?>assets/img/logo-pic.jpg); background-position: center; background-size: cover"></div>
                <div class="col-lg-6">
                  <br><br><br>
                  <div class="p-5">
                    <div class="text-center">
                      <h1 class="h4 text-gray-900 mb-4">Selamat Datang!</h1>
                    </div>
                    <?=$this->session->flashdata('message');?>

                    <form class="user" method="POST" action="<?=base_url();?>Auth/">
                      <div class="form-group">
                        <input type="text" name="username" class="form-control form-control-user" id="exampleInputUser" value="<?= set_value('username');?>" placeholder="Username">
                        <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                      </div>
                      <div class="form-group">
                        <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                        <?= form_error('password', '<small class="text-d anger pl-3">', '</small>'); ?>
                      </div>
                      <div class="form-group">
                        <div class="custom-control custom-checkbox small">
                          <input type="checkbox" class="custom-control-input" id="customCheck">
                          <label class="custom-control-label" for="customCheck">Remember Me</label>
                        </div>
                      </div>
                      <br>
                      <button type="submit" class="btn btn-primary btn-user btn-block">
                        Login
                      </button>
                    </form>
                    <hr>
                    <br>
                    <div class="text-center">
                      <a class="small" href="<?=base_url();?>Auth/forgotAccount">Lupa Password ?</a>
                    </div>
                    <div class="text-center">
                      <a class="small" href="<?=base_url();?>Auth/register">Belum Punya Akun? Daftar kuy!</a>
                    </div>
                    <br>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>

    </div>