</div>

  <!-- End of Page Wrapper -->



  <!-- Scroll to Top Button-->

  <a class="scroll-to-top rounded" href="#page-top">

    <i class="fas fa-angle-up"></i>

  </a>



  <!-- Logout Modal-->

  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

    <div class="modal-dialog" role="document">

      <div class="modal-content">

        <div class="modal-header">

          <h5 class="modal-title" id="exampleModalLabel">Sudah mau pergi ?</h5>

          <button class="close" type="button" data-dismiss="modal" aria-label="Close">

            <span aria-hidden="true">×</span>

          </button>

        </div>

        <div class="modal-body">Silahkan pilih tombol logout untuk keluar</div>

        <div class="modal-footer">

          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>

          <a class="btn btn-primary" href="<?=base_url();?>Auth/logout">Logout</a>

        </div>

      </div>

    </div>

  </div>


  <!-- Erase Anggota Modal-->

  <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

    <div class="modal-dialog" role="document">

      <div class="modal-content">

        <div class="modal-header">

          <h5 class="modal-title" id="exampleModalLabel">Ciusaan ini anggota mau dihapus ?</h5>

          <button class="close" type="button" data-dismiss="modal" aria-label="Close">

            <span aria-hidden="true">×</span>

          </button>

        </div>

        <div class="modal-body">
          <p>Seriusan user dengan id : <input type="text" readonly name="bookId" id="deleteModal" value=""/></p>
          <p>Klo dihapus tidak bisa dikembalikan lagi lho..</p>
          
        </div>

        <div class="modal-footer">

          <button class="btn btn-secondary" type="button" data-dismiss="modal">Gak jadi deh</button>

          <a class="btn btn-danger" href="<?=base_url();?>Admin/deleteAnggota/">Hapus</a>

        </div>

      </div>

    </div>

  </div>



  <!-- Syarat dan Ketentuan Modal-->

  <div class="modal fade" id="syaratModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

    <div class="modal-dialog" role="document">

      <div class="modal-content">

        <div class="modal-header">

          <h5 class="modal-title" id="exampleModalLabel">Syarat Dan Ketentuan</h5>

          <button class="close" type="button" data-dismiss="modal" aria-label="Close">

            <span aria-hidden="true">×</span>

          </button>

        </div>

        <div class="modal-body">

          <p>1. Anggota JJLC adalah Mahasiswa Aktif dan Alumni Universitas Negeri Jakarta.</p>

          <p>2. Tidak Sedang dalam Kasus Kriminal Baik Internal Kampus Maupun Eksternal.</p>

          <p>3. Memiliki Minat terhadap Kebudayaan Jepang</p>

          <p>4. Tidak Menggunakan Narkoba</p>

          <p>5. Menjaga Nama Baik JJLC serta UNJ</p>

          <p>6. Bersedia Aktif dalam Kegiatan JJLC</p>

          <p>7. Bersedia Mengeluarkan Ide Pikiran untuk Kepentingan Bersama</p>

          <p>8. Berazas Pancasila</p>

        </div>

        <div class="modal-footer">

          <button class="btn btn-secondary" type="button" data-dismiss="modal">Tutup</button>

        </div>

      </div>

    </div>

  </div>



  <!-- Bootstrap core JavaScript-->

  <script src="<?=base_url("assets/vendor/jquery/jquery.min.js");?>"></script>

  <script src="<?=base_url("assets/vendor/bootstrap/js/bootstrap.bundle.min.js");?>"></script>



  <!-- Core plugin JavaScript-->

  <script src="<?=base_url("assets/vendor/jquery-easing/jquery.easing.min.js");?>"></script>



  <!-- Custom scripts for all pages-->

  <script src="<?=base_url("assets/js/sb-admin-2.min.js");?>"></script>



  <!-- Page level plugins -->

  <script src="<?=base_url("assets/vendor/datatables/jquery.dataTables.min.js");?>"></script>

  <script src="<?=base_url("assets/vendor/datatables/dataTables.bootstrap4.min.js");?>"></script>

  <!-- <script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>

  <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>

  <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>

  <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script> -->



  <!-- Page level custom scripts -->

  <script src="<?=base_url("assets/js/demo/datatables-demo.js");?>"></script>





  <!-- Gijgo Datetimepicker -->

  <script src="<?=base_url("assets/vendor/gijgo/js/gijgo.min.js");?>"></script>



  <!-- Fullcalendar -->

  <script src="<?=base_url("assets/vendor/fullcalendar/core/main.js");?>"></script>

  <script src="<?=base_url("assets/vendor/fullcalendar/interaction/main.js");?>"></script>

  <script src="<?=base_url("assets/vendor/fullcalendar/daygrid/main.js");?>"></script>



  <script>

    $('.custom-file-input').on('change', function() { let fileName = $(this).val().split('\\').pop(); $(this).next('.custom-file-label').addClass("selected").html(fileName);

    });



    $('#tgl_lahir').datepicker({

      datepicker: { showOtherMonths: true },

      modal: true,

      uiLibrary: 'bootstrap4',

      format: 'yyyy-mm-dd',

      footer: false

    });



    $('#tgl_mulai_vote').datetimepicker({

      datepicker: { showOtherMonths: true },

      modal: true,

      uiLibrary: 'bootstrap4',

      format: 'yyyy-mm-dd HH:MM',

      footer: false

    });



    $('#tgl_selesai_vote').datetimepicker({

      datepicker: { showOtherMonths: true },

      modal: true,

      uiLibrary: 'bootstrap4',

      format: 'yyyy-mm-dd HH:MM',

      footer: false

    });

    $(document).on("click", ".deleteAnggota", function () {
     var idAnggota = $(this).data('id');
     $(".modal #deleteModal").val( idAnggota );

    });


  </script>

  <!-- FullCalender JS Config -->

  <script>



  document.addEventListener('DOMContentLoaded', function() {

    var calendarEl = document.getElementById('calendar');



    var calendar = new FullCalendar.Calendar(calendarEl, {

      plugins: [ 'interaction', 'dayGrid' ],

      defaultDate: '2019-04-12',

      editable: true,

      eventLimit: true, // allow "more" link when too many events

      events: [

        {

          title: 'Rapat dengan si cinta',

          start: '2019-04-01'

        },

        {

          title: 'Long Event',

          start: '2019-04-07',

          end: '2019-04-10'

        },

        {

          groupId: 999,

          title: 'Repeating Event',

          start: '2019-04-09T16:00:00'

        },

        {

          groupId: 999,

          title: 'Repeating Event',

          start: '2019-04-16T16:00:00'

        },

        {

          title: 'Conference',

          start: '2019-04-11',

          end: '2019-04-13'

        },

        {

          title: 'Meeting',

          start: '2019-04-12T10:30:00',

          end: '2019-04-12T12:30:00'

        },

        {

          title: 'Lunch',

          start: '2019-04-12T12:00:00'

        },

        {

          title: 'Meeting',

          start: '2019-04-12T14:30:00'

        },

        {

          title: 'Happy Hour',

          start: '2019-04-12T17:30:00'

        },

        {

          title: 'Dinner',

          start: '2019-04-12T20:00:00'

        },

        {

          title: 'Birthday Party',

          start: '2019-04-13T07:00:00'

        },

        {

          title: 'Click for Google',

          url: 'http://google.com/',

          start: '2019-04-28'

        }

      ]

    });



    calendar.render();

  });



</script>





  <!-- Page level plugins -->

  <!-- <script src="<?=base_url("assets/vendor/chart.js/Chart.min.js");?>"></script> -->



  <!-- Page level custom scripts -->

  <!-- <script src="<?=base_url("assets/js/demo/chart-area-demo.js");?>"></script> -->

  <!-- <script src="<?=base_url("assets/js/demo/chart-pie-demo.js");?>"></script> -->



</body>



</html>