      </div>
      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>copyright &copy; <script> document.write(new Date().getFullYear()); </script> - developed by
              <b><a href="https://tik.itera.ac.id/" target="_blank">UPT TIK Institut Teknologi Sumatera</a></b>
            </span>
          </div>
        </div>
      </footer>
      <!-- Footer -->
    </div>
  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
      
 <script src="https://unpkg.com/@popperjs/core@2" type="text/javascript"></script>
  <script src="<?=base_url()?>assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?=base_url()?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?=base_url()?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="<?=base_url()?>assets/js/ruang-admin.min.js"></script>
 
  <script src="<?=base_url()?>assets/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="<?=base_url()?>assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>
  <script src="<?=base_url()?>assets/datetimepicker/jquery.datetimepicker.full.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>vendor/zebra_datepicker/zebra_datepicker.min.js"></script>
  <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
  <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />

  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
  
  <!-- Page level custom scripts -->
  <script>
    $(document).ready(function () {
      $.fn.dataTable.moment('DD-MM-YYYY');

      $('.dataTable').DataTable(); // ID From dataTable 
      $('.dataTableHover').DataTable(); // ID From dataTable with Hover

      $('.dataTableHoverRektor').DataTable({
        // 'ordering' : false,
        dom: 'Blfrtip',
        buttons: [
            'excel', 
            {
                extend: 'pdfHtml5',
                orientation: 'landscape',
                pageSize: 'A4'
            }
        ],
        lengthMenu: [
          [ 50,100,200,300,400,500,600,1000,2000,3000], [ 50,100,200,300,400,500,600,1000,2000,3000]
        ]
      });
      $('.dataTableHoverRektor1').DataTable({
        dom: 'Bfrtip',
        "ordering": false,
        buttons: [
            'copy', 'csv', 'excel', 'print',
            {
                extend: 'pdfHtml5',
                orientation: 'landscape',
                pageSize: 'A4'
            }
        ]
      });
      $('#tglawal').datepicker({
            uiLibrary: 'bootstrap4',
            format: 'yyyy-mm-dd'
      });

      $('.tanggal').datepicker({
            uiLibrary: 'bootstrap4',
            format: 'mm/yyyy'
      });
      $('.tanggaljam2').datepicker({
            uiLibrary: 'bootstrap4',
            format: 'dd/mm/yyyy'
      });

      $('.tanggaljam').datetimepicker({
        format: 'yyyy-mm-dd HH:MM',
        footer: true, 
        modal: true 
      });
      $('.tanggalanwaktu').Zebra_DatePicker({
        default_position: 'below',
        format: 'Y-m-d H:i:s'
      });
      $('#editordata').summernote({
        height: 400,
        styleWithSpan: false
      });
      jQuery('.tanggaljam2').datetimepicker();
      $('#tglakhir').datepicker({
            uiLibrary: 'bootstrap4',
            format: 'yyyy-mm-dd'
      });
    });
  </script>
  <?php 
    if(!empty($modal)){
      // foreach($modal as $row_modal){
      //   $this->load->view($row_modal);
      // }
      $this->load->view($modal);
    }
    
    if(!empty($script)){
    
      $this->load->view($script);
    }

    
  ?>
<link href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/buttons/1.6.1/css/buttons.dataTables.min.css" rel="stylesheet">
<script src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.print.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.8.4/moment.min.js"></script>
<script src="https://cdn.datatables.net/plug-ins/1.10.15/sorting/datetime-moment.js"></script>

</body>

</html>