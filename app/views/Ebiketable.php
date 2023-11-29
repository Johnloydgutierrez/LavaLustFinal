<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
     body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .navbar {
            background-color: #3498db;
            padding: 5px;
            color: white;
            text-align: left;
        }

        .nav-item {
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            display: inline-block;
            font-size: 16px;
            margin: 0 10px;
        }

        .nav-item:hover {
            background-color: #2980b9;
        }

        .container {
            max-width: 1200px;
            margin: 50px auto;
            padding: 20px;
            border: 2px solid #dddddd;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .task-table {
    width: 90%;
    margin: 20px auto; /* Center the table horizontally */
    border-collapse: collapse;
    overflow: hidden;
    border-radius: 15px;
}
body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            color: #495057;
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

        .table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .table th, .table td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #dee2e6;
        }

        .edit-button, .delete-button {
            text-decoration: none;
            color: #007bff;
            cursor: pointer;
            margin-right: 10px;
        }

        .edit-button:hover, .delete-button:hover {
            text-decoration: underline;
        }

        .fas {
            margin-right: 5px;
        }
    </style>
<body>
<div class="navbar">
    <a href="/home" class="nav-item">Back</a>
    
</div>
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
                                        <th>Category</th>
                                        <th>Stock</th>
                                    </thead>
                                    <tbody>
                                        <?php $LAVA =& lava_instance(); ?>
                                       <?php  $LAVA->call->model('User_model'); ?>
                                     <?php    $info = $LAVA->User_model->getProduct(); ?>
                                        <?php foreach($info as $for): ?>
                                    <tr>
                                        <td><?= $for['productName']?></td>
                                        <td><?= $for['description']?></td>
                                        <td><?= $for['price']?></td>
                                        <td><?= $for['category']?></td>
                                        <td><?= $for['stock']?></td>
                                        <td><a href="/edit/<?= $for['ProductID'] ?>" class="edit-button">
                                    <i class="fas fa-edit"></i> Edit
                                    </a>  &#160;
                                    <a href="/delete/<?= $for['ProductID'] ?>" class="delete-button">
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
</body>
</html>