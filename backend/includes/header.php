<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Inventory Management System</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Morris chart -->
    <link href="plugins/morris/morris.css" rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <link href="plugins/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
    <!-- Daterange picker -->
    <link href="plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="skin-blue">
    <div class="wrapper">
      
      <header class="main-header">
        <!-- Logo -->
        <a href="index2.html" class="logo"><b>Inventory</b>Mgmt<b>System</b></a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button"></a>
            <span class="sr-only">Toggle navigation</span>
          </a>
        
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src=".jpg" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
              <p>IMS</p>

              <!-- <a href="#"><i class="fa fa-circle text-success"></i> Online</a> -->
            </div>
          </div>
          <!-- search form -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active treeview">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>
                <!-- yo thau ma chai menu ko kura halni hai -->
              </a>
              <!-- <ul class="treeview-menu">
                <li><a href="index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
                <li class="active"><a href="index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
              </ul>
            </li> -->
            <li class=" treeview">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>Material</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="material_insert.php"><i class="fa fa-circle-o"></i>Insert Material</a></li>
                <li class="active"><a href="materialdisplay.php"><i class="fa fa-circle-o"></i>Display Material </a></li>
                
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-dashboard"></i><span>Product</span><i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="product_insert.php"><i class="fa fa-circle-o"></i>Insert Product</a></li>
                <li class="active"><a href="productdisplay.php"><i class="fa fa-circle-o"></i>Display Product </a></li>
                
              </ul>
            </li>
        
            <li class="treeview">
              <a href="#">
                <i class="fa fa-dashboard"></i><span>Order</span><i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="order_insert.php"><i class="fa fa-circle-o"></i>Insert Order</a></li>
                <li class="active"><a href="orderdisplay.php"><i class="fa fa-circle-o"></i>Display Order </a></li>
                
              </ul>
            </li>
         
            <li class="treeview">
              <a href="#">
                <i class="fa fa-dashboard"></i><span>Customer</span><i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="customer_insert.php"><i class="fa fa-circle-o"></i>Insert Customer </a></li>
                <li class="active"><a href="customerdisplay.php"><i class="fa fa-circle-o"></i>Display Customer </a></li>
                
              </ul>
            </li>
            <li class=" treeview">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>Type</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="type_insert.php"><i class="fa fa-circle-o"></i>Insert Types</a></li>
                <li class="active"><a href="typedisplay.php"><i class="fa fa-circle-o"></i>Display Types </a></li>
               
              </ul>
              </li>
              <li class=" treeview">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>Admin</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="admin_insert.php"><i class="fa fa-circle-o"></i>Insert Admin</a></li>
                <li class="active"><a href="admindisplay.php"><i class="fa fa-circle-o"></i>Display Admin </a></li>
                
                
              </ul>
            </li>
            
            <li><a href="documentation/index.html"><i class="fa fa-book"></i> Documentation</a></li>
           
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          
        </section>

        <!-- Main content -->
        <section class="content">
         
        <!-- <li class=" treeview">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>BOOKS</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="bookinsert.php"><i class="fa fa-circle-o"></i>Insert Books</a></li>
                <li class="active"><a href="a.php"><i class="fa fa-circle-o"></i>a</a></li>
              </ul>
            </li> -->