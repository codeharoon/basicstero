<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('assets/backend/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/backend/vendors/css/vendor.bundle.base.css')}}">
    <link rel="stylesheet" href="{{asset('assets/backend/css/dropzone.min.css')}}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('assets/backend/css/style.css')}}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{asset('assets/backend/images/favicon.png')}}" />
    <style>
        .tox-notifications-container{
            display: none !important;
        }
    </style>
    @yield('styles')
</head>
<body>
<div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
            <a class="navbar-brand brand-logo" href="/">
                <img src="{{asset('img/logo.png')}}" alt="logo" style="width: 40px" />
            </a>
            <a class="navbar-brand brand-logo-mini" href="#">
                <img src="{{asset('img/logo.png')}}" alt="logo" style="width: 40px;" />
            </a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                <span class="mdi mdi-menu"></span>
            </button>
            <div class="search-field d-none d-md-block">
                <form class="d-flex align-items-center h-100" action="#">
                    <div class="input-group">
                        <div class="input-group-prepend bg-transparent">
                            <i class="input-group-text border-0 mdi mdi-magnify"></i>
                        </div>
                        <input type="text" class="form-control bg-transparent border-0" placeholder="Search projects">
                    </div>
                </form>
            </div>
            <ul class="navbar-nav navbar-nav-right">
                <li class="nav-item nav-profile dropdown">
                    <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                        <div class="nav-profile-img">
                            <img src="{{asset('assets/backend/images/faces/face1.jpg')}}" alt="image">
                            <span class="availability-status online"></span>
                        </div>
                        <div class="nav-profile-text">
                            <p class="mb-1 text-black"> </p>
                        </div>
                    </a>
                    <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                        <a class="dropdown-item" href="#">
                            <i class="mdi mdi-account mr-2 text-primary"></i>
                            Change Password
                        </a>
                        <a class="dropdown-item" href="">
                            <i class="mdi mdi-logout mr-2 text-primary"></i>
                            Logout
                        </a>
                    </div>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                <span class="mdi mdi-menu"></span>
            </button>
        </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
                <li class="nav-item nav-profile">
                    <a href="#" class="nav-link">
                        <div class="nav-profile-image">
                            <img src="{{asset('assets/backend/images/faces/face1.jpg')}}" alt="profile">
                            <span class="login-status online"></span>
                            <!--change to offline or busy as needed-->
                        </div>
                        <div class="nav-profile-text d-flex flex-column">
                            <span class="font-weight-bold mb-2">Haroon</span>
                            <span class="text-secondary text-small">Admin</span>
                        </div>
                        <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">
                        <span class="menu-title">Dashboard</span>
                        <i class="mdi mdi-home menu-icon"></i>
                    </a>
                </li>


                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#add-new" aria-expanded="false" aria-controls="general-pages">
                        <span class="menu-title">News</span>
                        <i class="menu-arrow"></i>
                        <i class="mdi mdi-medical-bag menu-icon"></i>
                    </a>
                    <div class="collapse" id="add-new">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="{{route('addnews')}}"> Add News </a></li>
                            <li class="nav-item"> <a class="nav-link" href="{{route('allnews')}}"> View News </a></li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#add-discount" aria-expanded="false" aria-controls="general-pages">
                        <span class="menu-title">Discount</span>
                        <i class="menu-arrow"></i>
                        <i class="mdi mdi-medical-bag menu-icon"></i>
                    </a>
                    <div class="collapse" id="add-discount">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="{{route('creatediscount')}}"> Add Discount </a></li>
                            <li class="nav-item"> <a class="nav-link" href="{{route('alldiscount')}}"> View Discount </a></li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#add-faq" aria-expanded="false" aria-controls="general-pages">
                        <span class="menu-title">Faq</span>
                        <i class="menu-arrow"></i>
                        <i class="mdi mdi-medical-bag menu-icon"></i>
                    </a>
                    <div class="collapse" id="add-faq">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="{{route('createfaq')}}"> Add FAQ </a></li>
                            <li class="nav-item"> <a class="nav-link" href="{{route('allfaq')}}"> View FAQ </a></li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#add-labreport" aria-expanded="false" aria-controls="general-pages">
                        <span class="menu-title">LabReport</span>
                        <i class="menu-arrow"></i>
                        <i class="mdi mdi-medical-bag menu-icon"></i>
                    </a>
                    <div class="collapse" id="add-labreport">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="{{route('createreport')}}"> Add Report </a></li>
                            <li class="nav-item"> <a class="nav-link" href="{{route('allreport')}}"> View Report </a></li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#add-warehouse" aria-expanded="false" aria-controls="general-pages">
                        <span class="menu-title">Warehouse</span>
                        <i class="menu-arrow"></i>
                        <i class="mdi mdi-medical-bag menu-icon"></i>
                    </a>
                    <div class="collapse" id="add-warehouse">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="{{route('createwarehouse')}}"> Add Warehouse </a></li>
                            <li class="nav-item"> <a class="nav-link" href="{{route('allwarehouse')}}"> View Warehouse </a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#add-classification" aria-expanded="false" aria-controls="general-pages">
                        <span class="menu-title">Classification</span>
                        <i class="menu-arrow"></i>
                        <i class="mdi mdi-medical-bag menu-icon"></i>
                    </a>
                    <div class="collapse" id="add-classification">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="{{route('createclassification')}}"> Add Project Classifications </a></li>
                            <li class="nav-item"> <a class="nav-link" href="{{route('allclassification')}}"> View Project classifications  </a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#add-category" aria-expanded="false" aria-controls="general-pages">
                        <span class="menu-title">Category</span>
                        <i class="menu-arrow"></i>
                        <i class="mdi mdi-medical-bag menu-icon"></i>
                    </a>
                    <div class="collapse" id="add-category">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="{{route('createcategory')}}"> Add Project category </a></li>
                            <li class="nav-item"> <a class="nav-link" href="{{route('allcategory')}}"> View Project category  </a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#add-project" aria-expanded="false" aria-controls="general-pages">
                        <span class="menu-title">Products</span>
                        <i class="menu-arrow"></i>
                        <i class="mdi mdi-medical-bag menu-icon"></i>
                    </a>
                    <div class="collapse" id="add-project">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="{{route('createproduct')}}"> Add Products </a></li>
                            <li class="nav-item"> <a class="nav-link" href="{{route('allproducts')}}"> View Products </a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages">
                        <span class="menu-title">Contact</span>
                        <i class="menu-arrow"></i>
                        <i class="mdi mdi-medical-bag menu-icon"></i>
                    </a>
                    <div class="collapse" id="general-pages">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href=""> View contact </a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#add-role" aria-expanded="false" aria-controls="general-pages">
                        <span class="menu-title">Roles</span>
                        <i class="menu-arrow"></i>
                        <i class="mdi mdi-medical-bag menu-icon"></i>
                    </a>
                    <div class="collapse" id="add-role">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="{{route('addRole')}}"> Add Role </a></li>
                            <li class="nav-item"> <a class="nav-link" href="{{route('role')}}"> View Role </a></li>
                        </ul>
                    </div>
                </li>

            </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                @yield('main-content')
            </div>
            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->
            <footer class="footer">
                <div class="d-sm-flex justify-content-center justify-content-sm-between">
                    <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021 <a href="#" target="_blank">Masterpharmalab</a>. All rights reserved.</span>
                </div>
            </footer>
            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
<script src="{{asset('assets/backend/vendors/js/vendor.bundle.base.js')}}"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="{{asset('assets/backend/vendors/chart.js/Chart.min.js')}}"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="{{asset('assets/backend/js/off-canvas.js')}}"></script>
<script src="{{asset('assets/backend/js/hoverable-collapse.js')}}"></script>
<script src="{{asset('assets/backend/js/misc.js')}}"></script>
<script src="{{asset('assets/backend/js/dropzone.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/backend/js/tinymce.min.js')}}"></script>
<script src="{{asset('assets/frontend/js/image-uploader.min.js')}}"></script>
<script type="text/javascript">
    tinymce.init({
        selector: 'textarea',
        plugins: 'advlist autolink lists link image charmap print preview hr anchor pagebreak',
        toolbar_mode: 'floating',
    });
</script>
<!-- endinject -->
<!-- Custom js for this page -->
<script src="{{asset('assets/backend/js/dashboard.js')}}"></script>
<script src="{{asset('assets/backend/js/todolist.js')}}"></script>

<!-- End custom js for this page -->
@yield('script')
</body>
</html>
