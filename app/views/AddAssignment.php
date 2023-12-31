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
    .insert-form {
        max-width: 400px;
        margin: 0 auto;
        padding: 20px;
        background-color: #f4f4f4;
        border: 1px solid #ddd;
        border-radius: 5px;
    }

    h1 {
        text-align: center;
        color: #333;
    }

    label {
        display: block;
        margin-bottom: 8px;
    }

    input {
        width: 100%;
        padding: 8px;
        margin-bottom: 10px;
        box-sizing: border-box;
    }

    input[type="submit"] {
        background-color: #4caf50;
        color: white;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #45a049;
        
    }
    .task-table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
        font-family: Arial, sans-serif;
    }

    th, td {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    th {
        background-color: #4caf50;
        color: white;
    }

    tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    tr:hover {
        background-color: #f1f1f1;
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
                    <a href="/addparts" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Ebike Parts</a>
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

            <div class="container" style="margin-top: 60px;">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-6">
                <div class="card">
                    <div class="card-body p-2 p-md-3"> 
                        <h3 class="mb-2 pb-1 pb-md-2 mb-md-3">Add Task Details</h3> 
                        <form action="<?php echo site_url('AddAssignment');?>" method="post">

                            <div class="mb-1"> 
                                <label for="employee" class="form-label">Employee Name: 
                                </label>
                                <input type="text" name="employee" id="employee" class="form-control" required>
                            </div>

                            <div class="mb-1">
                                <label for="description" class="form-label">Description:</label>
                                <input type="text" name="description" id="description" class="form-control" required>
                            </div>

                            <div class="mb-1">
                                <label for="location" class="form-label">Location:</label>
                                <input type="float" name="location" id="location" class="form-control" required>
                            </div>

                            <div class="mb-1">
                                <label for="contact" class="form-label">Contact:</label>
                                <input type="text" name="contact" id="contact" class="form-control" required>
                            </div>
                            <div class="mb-1">
                                <label for="customer" class="form-label">Customer:</label>
                                <input type="text" name="customer" id="customer" class="form-control" required>
                            </div>

                            

                            <div class="mb-1"> 
                                <input class="btn btn-primary btn-sm" type="submit" value="Submit"> 
                            </div>

                        </form>
                  

        <div class="right-panel">
        <!-- <table class="task-table">
                <tr>
                    <th>Employee</th>
                    <th>Description</th>
                    <th>Location</th>
                    <th>Contact Number</th>
                    <th>Customer Name</th>
                    
                </tr>
                <?php $LAVA =& lava_instance(); ?>
                    <?php $LAVA->call->model('Main_model'); ?>
                    <?php $name = $LAVA->Main_model->table(); ?>
                <?php  foreach ($name as $n): ?>
                <tr>
                   
                    <td><?= $n['employee']?></td>
                    <td><?= $n['description']?></td>
                    <td><?= $n['location']?></td>
                    <td><?= $n['contact']?></td>
                    <td><?= $n['customer']?></td>
                <?php endforeach ?>

                </tr>
                <!-- Add more table rows as needed -->
            </table> 
            
        </div>
    </div>
  <!-- Footer Start -->
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

  <!-- Table Start -->

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