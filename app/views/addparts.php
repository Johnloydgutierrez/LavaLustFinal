<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Nwow Administrator</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link rel="icon" href="path/to/favicon.ico" type="image/x-icon">

    <!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- FontAwesome -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

<!-- Bootstrap Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Your custom scripts -->
<script src="public/admin/js/main.js"></script>
<meta content="Your keywords" name="keywords">
<meta content="Your description" name="description">


    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href=<?=site_url("public/admin/lib/owlcarousel/assets/owl.carousel.min.css") ?> rel="stylesheet">
    <link href=<?=site_url("public/admin/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css")?> rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href=<?=site_url("public/admin/css/bootstrap.min.css")?> rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href=<?=site_url("public/admin/css/style.css")?> rel="stylesheet">
</head>
<style>
        body {
       
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        .container-fluid {
            margin-top: 20px;
        }

        .bg-light {
            background-color: #ffffff;
        }

        .rounded {
            border-radius: 8px;
        }

        .p-4 {
            padding: 1.5rem !important;
        }

        .mb-4 {
            margin-bottom: 1.5rem !important;
        }

        .form-label {
            font-weight: bold;
        }

        .form-control {
            margin-bottom: 1rem;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        .text-center {
            text-align: center;
        }

        .text-sm-start {
            text-align: left;
        }

        .text-sm-end {
            text-align: right;
        }

        .text-muted {
            color: #6c757d;
        }

        .footer {
            background-color: #f8f9fa;
            padding: 1rem;
            border-top: 1px solid #dee2e6;
        }
    </style>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="/home" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class=""></i>NWOW ADMIN </h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="public/images/nwow.png" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Nwow Administrator</h6>
                        <span></span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                 
                    <a href="/AddAssignment" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>AddAssignment</a>
                    <a href="" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Ebike Parts</a>
                    <a href="/Ebike" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>EbikeList</a>
                    <a href="admintable" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Sale Management</a>
                    
                  
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
              
                <div class="navbar-nav align-items-center ms-auto">
                    
                   
                   
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="public/images/nwow.png" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="/" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
           <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6 mx-auto">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">NWOW Ebikelist</h6>
                            <form action="/<?=(isset($edit['id'])) ? "submitedit/" . $edit['id'] : "submit" ?>" method="post">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Product Name</label>
                                    <input type="text" class="form-control" id="name" name="name" required value="<?=(isset($edit['id'])) ? $edit['name'] : ""?>">

                                </div>
                                <div class="mb-3">
                                    <label for="description" class="form-label">Product Description</label>
                                    <textarea class="form-control" id="description" name="description" required><?=(isset($edit['id'])) ? $edit['description'] : ""?></textarea>
                                </div>

                                <!-- Price -->
                                <div class="mb-3">
                                    <label for="price" class="form-label">Price</label>
                                    <input type="number" class="form-control" id="price" name="price" required value="<?=(isset($edit['id'])) ? $edit['price'] : ""?>">
                                </div>

                                <!-- Stock -->


                                <button type="submit" class="btn btn-primary"><?=(isset($edit['id'])) ? "Update" : "Submit"?></button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
        
        <div class="container-fluid pt-4 px-4">
            <div class="row g-4">
                <div class="col-12">
                    <div class="bg-light rounded h-100 p-4">
                        <h6 class="mb-4">Products</h6>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <th>Product Name</th>
                                    <th>Description</th>
                                    <th>Price</th>
                                  
                                    
                                </thead>
                                <tbody>
                                    <?php $LAVA =& lava_instance(); ?>
                                    <?php $LAVA->call->model('partsModel'); ?>
                                    <?php $info = $LAVA->partsModel->getInfo(); ?>
                                    <?php foreach($info as $for): ?>
                                    <tr>
                                        <td><?= $for['name']?></td>
                                        <td><?= $for['description']?></td>
                                        <td><?= $for['price']?></td>    
                                        
                                        <td><a href="/edit/<?= $for['id'] ?>" class="edit-button">
                                                <i class="fas fa-edit"></i> Edit
                                            </a> &#160;
                                            <a href="/delete/<?= $for['id'] ?>" class="delete-button">
                                                <i class="fas fa-trash-alt"></i> Delete
                                            </a>
                                        </td>
                                    </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
           
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">Your Site Name</a>, All Right Reserved. 
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            Designed By <a href="https://htmlcodex.com">HTML Codex</a>
                        </br>
                        Distributed By <a class="border-bottom" href="https://themewagon.com" target="_blank">ThemeWagon</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

   
    <!-- JavaScript Libraries -->
    <script src=<?site_url("https://code.jquery.com/jquery-3.4.1.min.js6")?>></script>
    <script src=<?site_url("https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js")?>></script>
    <script src=<?site_url("public/admin/lib/chart/chart.min.js")?>></script>
    <script src=<?site_url("public/admin/lib/easing/easing.min.js")?>></script>
    <script src=<?site_url("public/admin/lib/waypoints/waypoints.min.js")?>></script>
    <script src=<?site_url("public/admin/lib/owlcarousel/owl.carousel.min.js")?>></script>
    <script src=<?site_url("public/admin/lib/tempusdominus/js/moment.min.js")?>></script>
    <script src=<?site_url("public/admin/lib/tempusdominus/js/moment-timezone.min.js")?>></script> 
    <script src=<?site_url("public/admin/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js")?>></script>

    <!-- Template Javascript -->
    <script src=<?site_url("public/admin/js/main.js")?>></script>
</body>

</html>