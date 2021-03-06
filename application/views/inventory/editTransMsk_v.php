<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SAG | EDIT TRANSACTION</title>
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
            <li class="active">Add Product Stock</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Your Page Content Here -->
          <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Edit Transaksi</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" method="post" action="<?php echo base_url().'index.php/inventory/do_edit_trans_receipt';?>">
                  <?php foreach ($trans as $tm) { ?>                  
                  <?php $sub = $tm['subtotal'];?>
                  <div class="box-body">
                    <div class="form-group">
                      <label for="kd_gudang" class="col-sm-2 control-label">Kategori</label>
                      <div class="col-sm-2">
                        <?php
                            $select = $tm['kategori'];                                                                                                  
                            $item = array();                            
                            foreach ($kategoris as $k) {
                              $item[$k['kategori_trans']] = $k['kategori_trans'];
                            }                                                                                                                  
                          echo form_dropdown('cbokat', $item, $select, 'class="form-control"');
                        ?>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="kd_gudang" class="col-sm-2 control-label">No Bukti</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" name="txtnobukti" value="<?php echo $tm['kd_transmsk'];?>">                    
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="kd_gudang" class="col-sm-2 control-label">Tanggal</label>
                      <div class="col-sm-2">
                        <input type="date" class="form-control" name="txttgl" value="<?php echo $tm['tanggal'];?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="nama_gudang" class="col-sm-2 control-label">Keterangan</label>
                      <div class="col-sm-3">
                        <textarea class="form-control" name="txtket"><?php echo $tm['keterangan'];?></textarea>
                      </div>
                    </div>                    
                  </div><!-- /.box-body -->     
                  <?php } ?>             
                  <table id="" class="table table-bordered table-hover">                                       
                  <thead>
                    <tr>
                      <th><input type="checkbox" class="check_all" onclick="select_all()"></th>
                      <th>Kode Produk</th>
                      <th>Nama Produk</th>
                      <th>Satuan</th>
                      <th>Quantity</th>
                      <th>Harga</th>
                      <th>Jumlah</th>                      
                    </tr>
                  </thead>
                  <tbody>              
                  <?php foreach ($items as $key=>$it) { ?>                              
                    <tr>
                      <td><input type="checkbox" class="case"></td>
                      <td><input type="text" class="form-control" id='txtkdbarang_<?php echo $key+1;?>' name='txtkdbarang[]' value="<?php echo $it['kd_produk'];?>"/></td>
                      <td><input type="text" class="form-control" id='txtnmbarang_<?php echo $key+1;?>' name='txtnmbarang[]' value="<?php echo $it['nama_produk'];?>"></td>
                      <td><input type="text" class="form-control" id='txtsatuan_<?php echo $key+1;?>' name='txtsatuan[]' value="<?php echo $it['satuan'];?>"></td>
                      <td><input type="text" class="form-control" id='txtqty_<?php echo $key+1;?>' name='txtqty[]' onchange="hitjumlah()" value="<?php echo $it['qty'];?>"></td> 
                      <td><input type="text" class="form-control" id='txtharga_<?php echo $key+1;?>' name='txtharga[]' onchange="hitjumlah()" value="<?php echo $it['harga'];?>"></td>
                      <td><input type="text" class="form-control" id='txtjumlah_<?php echo $key+1;?>' name='txtjumlah[]' value="<?php echo $it['jumlah'];?>" ></td>
                    </tr>
                  <?php } ?>                   
                  </tbody>                  
                </table>
                <div class="box-footer">
                  <a href="#" class="btn btn-primary addmore">+ Tambah</a>
                  <a href="#" class="btn btn-danger delete">- Hapus</a>                  
                  <div class="col-sm-3 pull-right">
                      <input type="text" class="form-control" name="txttot" id="total" value="<?php echo $sub;?>" readonly>
                  </div>
                  <label class="col-sm-2 control-label pull-right">TOTAL : </label>                                    
                </div>
                  <div class="box-footer">
                    <button type="submit" class="btn btn-info pull-left">Save</button>
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
         
      function hitjumlah(){
        var countings = document.getElementsByName('txtjumlah[]').length;
        for (var i = 1; i <= countings; i++) {
          var qty = document.getElementById('txtqty_'+i).value;
          var harga = document.getElementById('txtharga_'+i).value;
          var has = qty * harga;
          document.getElementById('txtjumlah_'+i).value = has; 
        };

        var arr = document.getElementsByName('txtjumlah[]');
        var tot=0;
        for(var i=0;i<arr.length;i++){
            if(parseInt(arr[i].value))
              tot += parseInt(arr[i].value);
        }
        document.getElementById('total').value = tot;
      }

      function run()
      {
        document.getElementById("hkat").value = document.getElementById("kat").value;
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
