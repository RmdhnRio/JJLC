  <?php wp_footer(); ?>



  <footer class="page-footer pink-gradient">

    <div class="container">

      <div class="row">

        <div class="col l6 s12">

          <h5 class="dark-text">JJLC</h5>

          <p class="grey-text text-lighten-4">Kami adalah sebuah komunitas pecinta kebudayaan jepang yang memiliki passion serta semangat dalam memberikan pengetahuan serta mendukung kebudayaan jepang dan pop culture</p>





        </div>

        <div class="col l3 s12">

          <h5 class="dark-text">JJLC</h5>

          <ul>

            <li><a class="dark-text" href="<?=site_url();?>">Home</a></li>

            <li><a class="dark-text" href="<?=site_url("/artikel");?>">Artikel</a></li>

            <li><a class="dark-text" href="<?=site_url("/kontak");?>">Kontak</a></li>

            <li><a class="dark-text" href="<?=site_url("/divisi");?>">Divisi</a></li>

            <li><a class="dark-text" href="<?=site_url("/profil");?>">Profil</a></li>

            <li><a class="dark-text" href="<?=site_url("/galeri");?>">Galeri</a></li>

            <li><a class="dark-text" href="<?=site_url("/Panel/Auth");?>">Masuk</a></li>

            <li><a class="dark-text" href="<?=site_url("/Panel/Auth/register");?>">Daftar</a></li>

            <li><a class="dark-text" href="<?=site_url("/about");?>">About</a></li>

          </ul>

        </div>

        <div class="col l3 s12">

          <h5 class="dark-text">Media Sosial</h5>

          <ul>

            <li><a class="dark-text" href="https://www.instagram.com/jjlc_unj/">Instagram</a></li>

            <li><a class="dark-text" href="https://www.facebook.com/Jakarta-Japan-Lunatic-Club-jjlc_unj-1425071381040347/">FB</a></li>

            <li><a class="dark-text" href="https://www.youtube.com/channel/UC9Xcow3FOE_AcPEjALaXDxw">Youtube</a></li>

            <li><a class="dark-text" href="#!">Twitter</a></li>

          </ul>

        </div>

      </div>

    </div>

    <div class="footer-copyright">

      <div class="container">

      Made by <a class="orange-text text-lighten-3" href="#">Materialize</a>

      </div>

    </div>

  </footer>





  <!--  Scripts-->

  <script src="<?=get_template_directory_uri(); ?>/assets/js/jquery-2.1.1.min.js"></script>

  <script src="<?=get_template_directory_uri(); ?>/assets/js/materialize.js"></script>

  <script src="<?=get_template_directory_uri(); ?>/assets/js/init.js"></script>

  <script src="<?=get_template_directory_uri(); ?>/assets/js/imagesloaded.pkgd.min.js"></script>

  <script src="<?=get_template_directory_uri(); ?>/assets/js/masonry.pkgd.js"></script>

  <script src="<?=get_template_directory_uri(); ?>/assets/js/materialize-masonry_fix.js"></script>

  <script type="text/javascript">

  $(document).ready(function(){

    $('.sidenav').sidenav();

    $('.materialboxed').materialbox();

    $(".dropdown-button").dropdown();

    $(".dropdown-mobile").dropdown();

    $('.slider').slider();

    $('.tambahkan').tooltip();

  });

  </script>



  </body>

</html>

