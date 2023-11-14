<?php ob_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin</title>
  <!-- css link -->
  <link rel="stylesheet" href="dist/css/index.css">
  <!-- boostrap link -->
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Thống kê</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="index.php" class="d-block">Nhóm 7</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link bg-danger">
              <i class="nav-icon"></i>
              <p>
                Danh mục khóa học
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?act=alldanhmuc&table=danh_muc_khoa_hoc" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tất cả danh mục</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?act=adddanhmuc" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Thêm danh mục</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon"></i>
              <p>
                Khóa học
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?act=allkhoahoc&table=khoa_hoc" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tất cả khóa học</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?act=addkhoahoc" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Thêm khóa học</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item menu-open">
            <a href="#" class="nav-link bg-warning">
              <i class="nav-icon"></i>
              <p>
                Tài khoản
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?act=taikhoanqtv&table=tai_khoan" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tài khoản Admin & NV</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?act=taikhoanhv&table=tai_khoan&col=id_role&condition=1" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tài khoản học viên</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?act=addtaikhoan" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tạo tài khoản</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item menu-open">
            <a href="#" class="nav-link bg-info">
              <i class="nav-icon"></i>
              <p>
                Bình luận
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?act=allbinhluan&table=binh_luan" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tất cả bình luận</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item menu-open">
            <a href="#" class="nav-link bg-gradient-maroon">
              <i class="nav-icon"></i>
              <p>
                Giảng viên
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?act=allgiangvien&table=giang_vien" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tất cả giảng viên</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?act=addgiangvien" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Thêm giảng viên</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item menu-open">
            <a href="#" class="nav-link bg-success">
              <i class="nav-icon"></i>
              <p>
                Chương trình khuyến mãi
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?act=allkhuyenmai&table=khuyen_mai" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Khuyến mãi đang hoạt động</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?act=addkhuyenmai" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tạo CT khuyến mại mới </p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item menu-open">
            <a href="#" class="nav-link bg-fuchsia">
              <i class="nav-icon"></i>
              <p>
                Quyền người truy cập
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?act=allrole&table=role" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Quyền người truy cập hiện có</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?act=addrole" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Thêm quyền người truy cập</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item menu-open">
            <a href="#" class="nav-link bg-gradient-lightblue">
              <i class="nav-icon"></i>
              <p>
                Liên hệ
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?act=alllienhe&table=lien_he" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Liên hệ từ khách hàng</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  <div class="content-wrapper">
    <div class="ctncontent">

    