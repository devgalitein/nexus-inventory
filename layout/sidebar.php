<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="./dashboard.php" class="brand-link">
        <img src="./dist/img/logo.png" alt="Nexus Inventory" class="brand-image img-circle elevation-3"
            style="opacity: 0.8" />
        <span class="brand-text font-weight-light">Inventory System</span>
    </a>
    <?php
function active($currect_page){
  $url_array =  explode('/', $_SERVER['REQUEST_URI']) ;
  $url = end($url_array);  
  if($currect_page == $url){
      echo 'active'; //class name in css 
  } 
}
?>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item" id="home">
                    <a class="nav-link <?php active('dashboard');?>" href="dashboard.php">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php active('product-list'); active('product-create');  active('product-edit')?>" href="product-list.php">
                        <i class="nav-icon fas fa-plus"></i>
                        <p>Products</p>
                    </a>
                </li>
                <li class="nav-item" id="inventory">
                    <a class="nav-link <?php active('inventory'); active('inventory-create'); active('inventory-edit')?>" href="inventory.php">
                        <i class="nav-icon fas fa-solid fa-warehouse"></i>
                        <p>Inventory</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php active('orders');?>" href="orders.php">
                        <i class="nav-icon fas fa-solid fa-list"></i>
                        <p>Orders</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php active('analytics');?>" href="analytics.php">
                        <i class="nav-icon fas fa-chart-area"></i>
                        <p>
                            Analytics
                            <i class="fa-solid fa-chart-simple"></i>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php active('sent-emails');?>" href="sent-emails.php">
                        <i class="nav-icon fas fa-envelope"></i>
                        <p>
                            Sent E-mails
                            <i class="fa-solid fa-chart-simple"></i>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php active('marketplace');?>" href="marketplace.php">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Market Place
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>