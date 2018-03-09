<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SISFO PENJUALAN | PT.SOKA CN</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="dist/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
  <link rel="stylesheet" href="dist/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="dist/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/AdminLTE/AdminLTE.min.css">
   <!-- DataTables -->
  <link rel="stylesheet" href="dist/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="dist/datatables.net-bs/responsive.dataTables.min.css">
  <link rel="stylesheet" href="dist/datatables.net-bs/rowReorder.dataTables.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="dist/select2/dist/css/select2.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/AdminLTE/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="dist/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="dist/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="dist/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="dist/bootstrap-daterangepicker/daterangepicker.css">
    <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="dist/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

</head>

<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">

<?php include "home.php"; ?>
	 
	</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="dist/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="dist/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="dist/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="dist/raphael/raphael.min.js"></script>
<script src="dist/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="dist/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="dist/jvectormap/plugins/jquery-jvectormap-1.2.2.min.js"></script>
<script src="dist/jvectormap/plugins/jquery-jvectormap-world-mill-en.js"></script>
<!-- DataTables -->
<script src="dist/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="dist/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="dist/datatables.net-bs/dataTables.rowReorder.min.js"></script>
<script src="dist/datatables.net-bs/dataTables.responsive.min.js"></script>
<!-- Select2 -->
<script src="dist/select2/dist/js/select2.full.min.js"></script>
<!-- jQuery Knob Chart -->
<script src="dist/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="dist/moment/min/moment.min.js"></script>
<script src="dist/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="dist/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="dist/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="dist/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="dist/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/AdminLTE/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/AdminLTE/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/AdminLTE/dist/js/demo.js"></script>

<!-- page script -->
<script>
  $(document).ready(function(){
     var table = $('#example1').DataTable( {
        rowReorder: {
            selector: 'td:nth-child(2)'
        },
        responsive: true
    } );
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false

    });

        //Initialize Select2 Elements
       $('.select2').select2()

  });
</script>


</body>
</html>