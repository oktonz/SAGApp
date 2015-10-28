<aside class="main-sidebar">

  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">

    <!-- Sidebar user panel (optional) -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php echo base_url().'assets/dist/img/';?>user2-160x160.jpg" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>Edi SA</p>
        <!-- Status -->
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>

    <!-- search form (Optional) -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
        <span class="input-group-btn">
          <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
        </span>
      </div>
    </form>
    <!-- /.search form -->

    <!-- Sidebar Menu -->
    <ul class="sidebar-menu">
      <li class="header">MAIN NAVIGATION</li>
      <!-- Optionally, you can add icons to the links -->
      <li class="active"><a href="index.html"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-cubes"></i> <span>Inventory Control</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li><a href="add_produk.html"><i class="fa fa-caret-right fa-fw"></i>Add New Product</a></li>
          <li><a href="#"><i class="fa fa-caret-right fa-fw"></i>Product Receipt</a></li>
          <li><a href="#"><i class="fa fa-caret-right fa-fw"></i>Product Delivery</a></li>
          <li><a href="view_produk.html"><i class="fa fa-caret-right fa-fw"></i>Stock Card</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#"><i class="fa fa-cart-plus"></i> <span>Purchasing</span> <i class="fa fa-angle-left pull-right"></i></a>
        <ul class="treeview-menu">
          <li>
            <a href="#"><i class="fa fa-caret-right fa-fw"></i>Supplier <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">
              <li><a href="#"><i class="fa fa-caret-right fa-fw"> Add Supplier</i></a></li>
              <li><a href="#"><i class="fa fa-caret-right fa-fw"> View Supplier</i></a></li>
            </ul>
          </li>
          <li><a href="#"><i class="fa fa-caret-right fa-fw"></i>Purchase Order</a></li>
          <li><a href="#"><i class="fa fa-caret-right fa-fw"></i>Purchasing</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-usd"></i> <span>Invoicing</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li>
            <a href="#"><i class="fa fa-caret-right fa-fw"></i>Customer <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">
              <li><a href="#"><i class="fa fa-caret-right fa-fw"> Add Customer</i></a></li>
              <li><a href="#"><i class="fa fa-caret-right fa-fw"> View Customer</i></a></li>
            </ul>
          </li>
          <li>
            <a href="#"><i class="fa fa-caret-right fa-fw"></i>Sales Order <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">
              <li><a href="#"><i class="fa fa-caret-right fa-fw"> Add SO</i></a></li>
              <li><a href="#"><i class="fa fa-caret-right fa-fw"> View SO</i></a></li>
            </ul>
          </li>
          <li>
            <a href="#"><i class="fa fa-caret-right fa-fw"></i>Invoicing <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">
              <li><a href="#"><i class="fa fa-caret-right fa-fw"> Add Invoice</i></a></li>
              <li><a href="#"><i class="fa fa-caret-right fa-fw"> View Invoice</i></a></li>
            </ul>
          </li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-book"></i> <span>General Ledger</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li><a href="#"><i class="fa fa-caret-right fa-fw"></i>Jurnal Umum 1</a></li>
          <li><a href="#"><i class="fa fa-caret-right fa-fw"></i>Jurnal Umum 2</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-link"></i> <span>Menu</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li><a href="#"><i class="fa fa-caret-right fa-fw"></i>Submenu 1</a></li>
          <li><a href="#"><i class="fa fa-caret-right fa-fw"></i>Submenu 2</a></li>
        </ul>
      </li>
    </ul><!-- /.sidebar-menu -->
  </section>
  <!-- /.sidebar -->
</aside>