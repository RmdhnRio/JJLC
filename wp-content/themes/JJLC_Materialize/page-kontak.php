<?php get_header(); ?> 

  <section class="page-title">
    <div class="row">
      <div class="container">
        <h4><?php the_title(); ?></h4>
        <div class="divider-left"></div>
      </div>
    </div>
  </section>

<section class="contact">
    <div class="row">
      <div class="container">
        <div class="col s12 ">
          <div class="card darken-1">
            <div class="card-content dark-text">
              <span class="card-title">Ingin berkolaborasi dengan komunitas kami ?</span>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              <br>

              <div class="row">
                <form class="col s12">
                  <h5>Isi Form berikut untuk pengajuan</h5>
                  <div class="divider-left"></div>
                  <br>
                  <div class="row">
                    <div class="input-field col s6">
                      <i class="material-icons prefix">account_circle</i>
                      <input placeholder="Nama" id="nama" name="nama" type="text" class="validate">
                      <label for="nama">Nama Lengkap</label>
                    </div>
                    <div class="input-field col s6">
                      <i class="material-icons prefix">email</i>
                      <input placeholder="email@email.com" id="email" nama="email" type="email" class="validate">
                      <label for="email">Email</label>
                      <span class="helper-text" data-error="wrong" data-success="right">Email aktif</span>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s6">
                      <i class="material-icons prefix">local_phone</i>
                      <input id="nomor_telepon" type="number" name="nomor_telepon" class="validate">
                      <label for="nomor_telepon">Nomor Telepon</label>
                      <span class="helper-text" data-error="wrong" data-success="right">Nomor telepon yang bisa kami hubungi</span>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s12">
                      <i class="material-icons prefix">live_help</i>
                      <textarea id="textarea1" class="materialize-textarea"></textarea>
                      <label for="textarea1">Maksud dan Tujuan</label>
                      <span class="helper-text" data-error="wrong" data-success="right">Sertakan maksud dan tujuan anda bekerjasama dengan kami</span>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s12">
                      <a class="waves-effect waves-light btn-large red"><i class="material-icons left">send</i>Submit</a>
                    </div>
                  </div>
                </form>
              </div>

              <h5>Mengenai Kerjasama</h5>
              <br>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

              <h5>Kontak Kami</h5>
              <br>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <div class="card-action">
              <a href="#">Keren!</a>
              <a href="#">Okeyy</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row contact-us">
      <div class="container">
        <div class="col s9">
          <div class="card darken-1">
            <div class="card-content dark-text">
              <span class="card-title">Hubungi kami</span>
              <h5>Jakarta Japan Lunatic Club</h5>
              <table class="striped">
                <tbody>
                  <tr>
                    <td><i class="material-icons prefix">explore</i></td>
                    <td>Kampus A UNJ (Kumpul Mingguan di BAAKHUM, pukul 16.00 - selesai)</td>
                  </tr>
                  <tr>
                    <td><i class="material-icons prefix">phone</i></td>
                    <td>082260897037 a/n Rio</td>
                  </tr>
                  <tr>
                    <td><i class="material-icons prefix">phone</i></td>
                    <td>082246813989 a/n Hazu</td>
                  </tr>
                  <tr>
                    <td><i class="material-icons prefix">chat</i></td>
                    <td>JJLC_UNJ / @gtw7566 (Line)</td>
                  </tr>
                  <tr>
                    <td><i class="material-icons prefix">photo_camera</i></td>
                    <td>@jjlc_unj (Instagram)</td>
                  </tr>
                  <tr>
                    <td><i class="material-icons prefix">forum</i></td>
                    <td>https://www.facebook.com/groups/JJLC.UNJ/ (Facebook)</td>
                  </tr>
                  <tr>
                    <td><i class="material-icons prefix">message</i></td>
                    <td>@JJLC_UNJ (Twitter)</td>
                  </tr>
                  <tr>
                    <td><i class="material-icons prefix">ondemand_video</i></td>
                    <td>Youtube Channel</td>
                  </tr>
                  <tr>
                    <td><i class="material-icons prefix">email</i></td>
                    <td>humas@jjlc-unj.com (Invitation and Business)</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>  
        </div>
      </div>
    </div>
  </section>

<?php get_footer(); ?>