<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <title><?html if(isset($page_title)){echo "$page_title " ; }else{echo "GDSC YEMEN"; }?></title>
    <meta name="description" content="<?html if(isset($meta_description)) { echo "$meta_description";} ?>" />
    <meta name = "keyword" content="<?html if(isset($meta_keyword)) {echo "$meta_keyword";} ?>" />
    <meta name = "author" content="GDSC YEMEN"/>
        <link href="css/style.css" rel="stylesheet" />
        <link rel="stylesheet" href="css/all.css">
        <link rel="stylesheet" href="css/brands.css">
        <link rel="stylesheet" href="css/summernote-lite.min.css">
        <link rel="stylesheet" href="css/sweetalert.css"> 
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/custome.css" rel="stylesheet" />
    </head>
    <body class="sb-nav-fixed" >

   <!-- start topNavbar  -->
   <nav  class=" sb-topnav navbar navbar-expand navbar-dark bg-primary">
    <!-- Navbar Brand-->
    <a class="navbar-brand ps-3" href="index.html">لوحة تحكم</a>
    <!-- Sidebar Toggle-->
    <button class="btn btn-link btn-sm order-1 order-lg-0 ms-4 me-lg-0" id="sidebarToggle" href="#!"><i
            class="fas fa-bars"></i></button>
    <!-- Navbar Search-->
    <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
        <div class="input-group">
            <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..."
                aria-describedby="btnNavbarSearch" />
            <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
        </div>
    </form>
    <!-- Navbar-->
    <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
         
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <form action="../allcode.html" method="post">
              <button name="logout" class="dropdown-item" type="submit">تسجيل الخروج</button>
            </form>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" class="btn bg-gradient" href="login.html" >دخول</a>
          </li>
        <li class="nav-item">
          <a class="nav-link" class="btn btn-danger" href="register.html" >تسجيل</a>
          </li>

            </ul>
        </li>
    </ul>
</nav>
   <!-- end topNavbar  -->
    <div id="layoutSidenav">
  <!-- start aside bar  -->
  <div  id="layoutSidenav_nav">
    <nav   class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <a class="nav-link" href="index.html">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                dashborad 
                <a class="nav-link" href="show_register.html">
                <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                   regsiter user
                </a> 
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                categories
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="Add_categories.html">Add categories</a>
                                    <a class="nav-link" href="view_category.html">View categories</a>
                                </nav>
                            </div>

                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsepost" aria-expanded="false" aria-controls="collapsepost">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Post
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsepost" aria-labelledby="Posts" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="Add_Post.html">Add Post</a>
                                    <a class="nav-link" href="view_Post.html">View Post</a>
                                </nav>
                            </div>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseSetting" aria-expanded="false" aria-controls="collapseSetting">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                        Setting
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseSetting" aria-labelledby="Setting" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="Add_Post.html">LogOut</a>
                                    <a class="nav-link" href="view_Post.html">View Post</a>
                                </nav>
                            </div>
                            
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Start Bootstrap
                    </div>
    </nav>
</div>

  <!-- end aside bar  -->
    <div id="layoutSidenav_content" >
                <main>