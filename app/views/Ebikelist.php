<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Nwow Administrator</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="" rel="">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="public/admin/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="public/admin/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="public/admin/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="public/admin/css/style.css" rel="stylesheet">
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
                            <form action="/<?=(isset($edit['product_id'])) ? "submitedit/" . $edit['product_id'] : "submit" ?>" method="post">
                                <div class="mb-3">
                                    <label for="productName" class="form-label">Product Name</label>
                                    <input type="text" class="form-control" id="productName" name="name" required value="<?=(isset($edit['product_id'])) ? $edit['name'] : ""?>">
                                </div>
                                <div class="mb-3">
                                    <label for="productDescription" class="form-label">Product Description</label>
                                    <textarea class="form-control" id="productDescription" name="description" required><?=(isset($edit['product_id'])) ? $edit['description'] : ""?></textarea>
                                </div>

                                <!-- Price -->
                                <div class="mb-3">
                                    <label for="exampleInputPrice" class="form-label">Price</label>
                                    <input type="number" class="form-control" id="exampleInputPrice" name="price" required value="<?=(isset($edit['product_id'])) ? $edit['price'] : ""?>">
                                </div>

                                <!-- Stock -->
                                <div class="mb-3">
                                    <label for="exampleInputStock" class="form-label">Stock</label>
                                    <input type="number" class="form-control" id="exampleInputStock" name="stock_quantity" required value="<?=(isset($edit['product_id'])) ? $edit['stock_quantity'] : ""?>">
                                </div>

                                <!-- Category -->
                                <h6 class="mb-4">Category</h6>
                                <select class="form-select form-select-sm mb-3" aria-label=".form-select-sm example" name="category_product" required>
                                    <option selected disabled>Select Category</option>
                                    <option value="2 wheels" <?=(isset($edit['product_id']) && $edit['category_product'] == "2 wheels") ? "selected" : ""?>>2 wheels</option>
                                    <option value="3 wheels" <?=(isset($edit['product_id']) && $edit['category_product'] == "3 wheels") ? "selected" : ""?>>3 wheels</option>
                                    <option value="4 wheels" <?=(isset($edit['product_id']) && $edit['category_product'] == "4 wheels") ? "selected" : ""?>>4 wheels</option>
    
                                </select>

                                <button type="submit" class="btn btn-primary"><?=(isset($edit['product_id'])) ? "Update" : "Submit"?></button>
                            </form>

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
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="public/admin/lib/chart/chart.min.js"></script>
    <script src="public/admin/lib/easing/easing.min.js"></script>
    <script src="public/admin/lib/waypoints/waypoints.min.js"></script>
    <script src="public/admin/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="public/admin/lib/tempusdominus/js/moment.min.js"></script>
    <script src="public/admin/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="public/admin/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="public/admin/js/main.js"></script>
</body>

</html>