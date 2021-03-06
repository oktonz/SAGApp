<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SAG | DETAIL STOCK CARD</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="<?php echo base_url().'assets/bootstrap/css/';?>bootstrap.min.css">
    <!-- MAIN -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/dist/css/';?>jquery-ui.min.css">
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
            Inventory Control
            <small>Version 0.1</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>SAG</a></li>
            <li>Inventory Control</li>
            <li class="active">Detail Stock Card</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Your Page Content Here -->
          <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Detail Stock Card</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" method="post" action="#">
                  <?php foreach ($stokcards as $sc) { ?>
                  <div class="box-body">
                    <div class="form-group">
                      <label for="kd_gudang" class="col-sm-2 control-label">Warehouse Code</label>
                      <div class="col-sm-2">
                        <input type="text" class="form-control" name="txtkdgudang" value="<?php echo $sc['kd_gudang'];?>" readonly>                    
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="kd_gudang" class="col-sm-2 control-label">Category Code</label>
                      <div class="col-sm-2">
                        <input type="text" class="form-control" name="txttgl" value="<?php echo $sc['kd_kategori'];?>" readonly>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="kd_gudang" class="col-sm-2 control-label">Product Code</label>
                      <div class="col-sm-2">
                        <input type="text" class="form-control" name="txttgl" value="<?php echo $sc['kd_produk'];?>" readonly>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="kd_gudang" class="col-sm-2 control-label">Product Name</label>
                      <div class="col-sm-3">
                        <input type="text" class="form-control" name="txttgl" value="<?php echo $sc['nama_produk'];?>" readonly>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="kd_gudang" class="col-sm-2 control-label">Cost Price</label>
                      <div class="col-sm-2">
                        <input type="text" class="form-control" name="txttgl" value="<?php echo $sc['harga_beli'];?>" readonly>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="kd_gudang" class="col-sm-2 control-label">Unit Price</label>
                      <div class="col-sm-2">
                        <input type="text" class="form-control" name="txttgl" value="<?php echo $sc['harga_jual'];?>" readonly>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="kd_gudang" class="col-sm-2 control-label">Stock</label>
                      <div class="col-sm-1">
                        <input type="text" class="form-control" name="txttgl" value="<?php echo $sc['stok'];?>" readonly>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="nama_gudang" class="col-sm-2 control-label">Description</label>
                      <div class="col-sm-3">
                        <textarea class="form-control" name="txtket" placeholder="Keterangan" readonly><?php echo $sc['ket_produk'];?></textarea>
                      </div>
                    </div>                    
                  </div><!-- /.box-body -->                  
                  <?php } ?>
                  <h4>Transaksi Barang Masuk</h4>
                  <table id="" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>No Bukti</th>
                      <th>Tanggal</th>
                      <th>Kode Produk</th>
                      <th>Nama Produk</th>
                      <th>Satuan</th>
                      <th>Qty Masuk</th> 
                      <th>Harga Beli</th>
                      <th>Jumlah</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($receipt as $rec) { ?>
                    <tr>
                      <td><?php echo $rec['kd_transmsk'];?></td>
                      <td><?php echo $rec['tanggal'];?></td>
                      <td><?php echo $rec['kd_produk'];?></td>
                      <td><?php echo $rec['nama_produk'];?></td>
                      <td><?php echo $rec['satuan'];?></td>
                      <td><?php echo $rec['qty'];?></td>
                      <td><?php echo $rec['harga'];?></td>
                      <td><?php echo $rec['jumlah'];?></td>
                    </tr>
                    <?php } ?>                    
                  </tbody>
                </table>              
                <h4>Transaksi Barang Keluar</h4>
                  <table id="" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>No Bukti</th>
                      <th>Tanggal</th>
                      <th>Kode Produk</th>
                      <th>Nama Produk</th>
                      <th>Satuan</th>
                      <th>Qty Keluar</th> 
                      <th>Harga Jual</th>
                      <th>Jumlah</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($deliver as $del) { ?>
                    <tr>
                      <td><?php echo $del['kd_transklr'];?></td>
                      <td><?php echo $del['tanggal'];?></td>
                      <td><?php echo $del['kd_produk'];?></td>
                      <td><?php echo $del['nama_produk'];?></td>
                      <td><?php echo $del['satuan'];?></td>
                      <td><?php echo $del['qty'];?></td>
                      <td><?php echo $del['harga'];?></td>
                      <td><?php echo $del['jumlah'];?></td>
                    </tr>
                    <?php } ?>                    
                  </tbody>
                </table>
                  <div class="box-footer">
                    <button class="btn btn-info" onClick="history.go(-1);return true;">Back</button>
                  </div><!-- /.box-footer -->
                </form>                            
          </div>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

      <!-- Main Footer -->
        <?php echo $footer;?>
      <!-- End Footer -->
      
    </div><!-- ./wrapper -->

    <script type="text/javascript">
      var BASE_URL = "<?php echo base_url();?>";
    </script>

    <script type="text/javascript">
      function findTotal(){
      var arr = document.getElementsByName('txtjumlah[]');
      var tot=0;
      for(var i=0;i<arr.length;i++){
          if(parseInt(arr[i].value))
              tot += parseInt(arr[i].value);
      }
      //document.getElementById('total').value = tot;
      $('#total').text(tot);
    }     
    </script>

    <!-- REQUIRED JS SCRIPTS -->

    <!-- jQuery 2.1.4 -->
    <script src="<?php echo base_url().'assets/plugins/jQuery/';?>jQuery-2.1.4.min.js"></script>
    <!-- jQuery UI -->
    <script src="<?php echo base_url().'assets/plugins/jQueryUI/';?>jQuery-ui.min.js"></script>
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
    <!-- Autocomplete-->
    <script src="<?php echo base_url().'assets/dist/js/';?>auto.js"></script> 
    <!-- Active Link -->   
    <script src="<?php echo base_url().'assets/dist/js/';?>highlightNav.js"></script>
  </body>
</html>
