<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SAG | SUPPLIER</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="<?php echo base_url().'assets/bootstrap/css/';?>bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url().'assets/dist/css/';?>AdminLTE.min.css">
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
    -->
    <link rel="stylesheet" href="<?php echo base_url().'assets/dist/css/skins/';?>skin-green.min.css">

    <!-- The fav icon -->
    <link rel="shortcut icon" href="<?php echo base_url().'assets/img/';?>favicon.png">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
      #rmvb{border: none;}
    </style>
  </head>
  
  <body class="hold-transition skin-green fixed sidebar-mini">
    <div class="wrapper">

      <!-- Main Header -->
        <?php echo $topbar;?>
      <!-- End Header -->

      <!-- Sidebar -->
        <?php echo $sidebar;?>
      <!-- End Sidebar -->

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Purchasing
            <small>Version 0.1</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>SAG</a></li>
            <li>Purchasing</li>
            <li class="active">SUPPLIER</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Your Page Content Here -->
          <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Supplier</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>Kode Supplier</th>
                      <th>Nama Supplier</th>
                      <th>Nama Perusahaan</th>
                      <th>Alamat</th>
                      <th>Kota</th>
                      <th>No Telepon</th>
                      <th width="10%">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($suppliers as $sups) { ?>
                    <tr>
                      <td><?php echo $sups['kd_sup'];?></td>
                      <td><?php echo $sups['nama_sup'];?></td>
                      <td><?php echo $sups['nama_perusahaan'];?></td>
                      <td><?php echo $sups['alamat'];?></td>
                      <td><?php echo $sups['kota'];?></td>
                      <td><?php echo $sups['telp'];?></td>
                      <td>
                        <a href="#" data-toggle="tooltip" title="View">
                          <i class="fa fa-search-plus fa-fw"></i>
                        </a>
                        <a href="<?php //echo base_url().'index.php/Inventory/edit_gudang/'.$g['kd_gudang'];?>" data-toggle="tooltip" title="Edit">
                          <i class="fa fa-edit fa-fw"></i>
                        </a>
                        <a href="<?php //echo base_url().'index.php/Inventory/do_del_gudang/'.$g['kd_gudang'];?>" 
                           onclick="return confirm('Yakin Akan dihapus ?');" data-toggle="tooltip" title="Delete">
                          <i class="fa fa-trash fa-fw"></i>
                        </a>
                      </td>
                    </tr>
                    <?php } ?>
                  </tbody>
                  <tfoot>
                    <tr>
                      <th>Kode Supplier</th>
                      <th>Nama Supplier</th>
                      <th>Nama Perusahaan</th>
                      <th>Alamat</th>
                      <th>Kota</th>
                      <th>No Telepon</th>
                      <th>Action</th>                
                    </tr>
                  </tfoot>
                </table>
          </div>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

      <!-- Main Footer -->
        <?php echo $footer;?>
      <!-- End Footer -->
      
    </div><!-- ./wrapper -->

    <!-- REQUIRED JS SCRIPTS -->

    <!-- jQuery 2.1.4 -->
    <script src="<?php echo base_url().'assets/plugins/jQuery/';?>jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="<?php echo base_url().'assets/bootstrap/js/';?>bootstrap.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url().'assets/dist/js/';?>app.min.js"></script>
    <!-- slimscroll -->
    <script src="<?php echo base_url().'assets/plugins/slimScroll/';?>jquery.slimscroll.min.js"></script>
     <!-- DataTables -->
    <script src="<?php echo base_url().'assets/plugins/datatables/';?>jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url().'assets/plugins/datatables/';?>dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url().'assets/dist/js/';?>datatabel.js"></script>
    <!-- Active Link -->
    <script src="<?php echo base_url().'assets/dist/js/';?>highlightNav.js"></script>
  </body>
</html>
