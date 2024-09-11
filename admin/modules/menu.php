


<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?php if(isset($_SESSION['dangnhap'])){
                                                            echo $_SESSION['dangnhap'];
                                                            }
                                                        ?></p>
        
      </div>
      <div class="pull-left info">
        <div style="text-align: center;">
        <a href="index.php?dangxuat=1" style="display: inline-block;">Đăng xuất</a>
        </div>
      </div>
    </div>
    
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
    <li>
        <a href="http://localhost/CarBreezy/admin/index.php">
          <i class="fa fa-th"></i> <span>Dashboard</span>
        </a>
      </li>

      <li class="treeview">
        <a href="#">
          <i class="fa fa-th"></i> <span>QL Danh muc</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
            <li><a href="index.php?action=quanlyshop&query=lietke"><i class="fa fa-circle-o"></i> Liet ke</a></li>
          <li><a href="index.php?action=quanlyshop&query=them"><i class="fa fa-circle-o"></i> Them</a></li>
        </ul>
      </li>
      
      <li class="treeview">
        <a href="#">
          <i class="fa fa-th"></i> <span>QL San Pham</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
            <li><a href="index.php?action=quanlysp&query=lietke"><i class="fa fa-circle-o"></i> Liet ke</a></li>
          <li><a href="index.php?action=quanlysp&query=them"><i class="fa fa-circle-o"></i> Them</a></li>
          
        </ul>
      </li>

      <li class="treeview">
        <a href="#">
          <i class="fa fa-th"></i> <span>QL Don Hang</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
            <li><a href="index.php?action=quanlydonhang&query=lietke"><i class="fa fa-circle-o"></i> Liet ke</a></li>
        </ul>
      </li>

      
      
      
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>