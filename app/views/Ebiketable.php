<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  
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
            margin: 50px auto; /* Center the container horizontally */
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

        th, td {
            border: 1px solid #dddddd;
            text-align: center;
            padding: 12px; /* Increased padding for better readability */
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
        h1{
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="navbar">
        <a href="/home" class="nav-item">Back</a>
    </div>
    <div class="container">
        <div class="row g-4">
            <div class="col-12">
                <div class="bg-light rounded h-100 p-4">
                    <h1 class="mb-4">Ebike Products</h1>
                    <div class="table-responsive">
                        <table class="task-table">
                            <thead>
                                <th>Product Name</th>
                                <th>Description</th>
                                <th>Price</th>
                                <th>Category</th>
                                <th>Stock</th>
                                
                            </thead>
                            <tbody>
                                <?php $LAVA =& lava_instance(); ?>
                                <?php $LAVA->call->model('Addproduct_model'); ?>
                                <?php $info = $LAVA->Addproduct_model->getInfo(); ?>
                                <?php foreach($info as $for): ?>
                                <tr>
                                    <td><?= $for['productName']?></td>
                                    <td><?= $for['description']?></td>
                                    <td><?= $for['price']?></td>    
                                    <td><?= $for['category']?></td>
                                    <td><?= $for['stock']?></td>
                                    
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
