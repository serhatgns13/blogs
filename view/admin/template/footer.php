</div>
</div>


<script src="/view/admin/assets/js/sidebars.js"></script>
<script src="/view/admin/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Bootstrap JS -->

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<!-- DataTable JS -->
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

<!-- <script>
        $(document).ready(function () {
            $('#studentTable').DataTable({
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.13.6/i18n/Turkish.json"
                }
            });
        });
    </script> -->
<script>
  $(function() {
    $("#studentTable").DataTable({
      "responsive": true,
      "lengthChange": false,
      "autoWidth": false,
      "buttons": [{
          extend: 'copy',
          text: 'Kopyala'
        },

        {
          extend: 'excel',
          text: 'Excel'
        },
        {
          extend: 'pdf',
          text: 'PDF'
        },
        {
          extend: 'print',
          text: 'Yazdır',
          message: null // "Exported data" mesajını kaldırıyoruz
        },
        {
          extend: 'colvis',
          text: 'Sütun Görünürlüğü'
        }
      ],
      "language": {
        "paginate": {
          "previous": "Önceki", // "Previous" yazısını Türkçeye çeviriyoruz
          "next": "Sonraki" // "Next" yazısını Türkçeye çeviriyoruz
        },
        "info": "Toplam _TOTAL_ kayıttan _START_ ile _END_  Arasındaki Kayıt gösteriliyor", // "Showing 1 to 3 of 3 entries" Türkçeye çevrildi
        "search": "Kayıt Ara:",
      }
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
      "language": {
        "paginate": {
          "previous": "Önceki", // "Previous" yazısını Türkçeye çeviriyoruz
          "next": "Sonraki" // "Next" yazısını Türkçeye çeviriyoruz
        },
        "info": "Toplam _TOTAL_ kayıttan _START_ ile _END_ Arasındaki Kayıt gösteriliyor", // "Showing 1 to 3 of 3 entries" Türkçeye çevrildi
        "search": "Kayıt Ara:"
      }
    });
  });
</script>
<!-- Data Table Mobil Görünüm -->

<script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.5.0/js/responsive.bootstrap5.min.js"></script>

</body>

</html>