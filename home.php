<?php include ("pages/master/header.php"); ?>
<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
   <?php include ("pages/master/menu.php"); ?>
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
   		<?php 

      if($page == 'supplier'){
      include("pages/supplier/view-supplier.php");  
      }
      else{
   		
   		include("pages/master/dashboard.php"); 
      
   		}
   		?>
  </div>
  <!-- /.content-wrapper -->
<?php include("pages/master/footer.php"); ?>