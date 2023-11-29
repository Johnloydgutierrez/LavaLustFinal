<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
    </style>
   <div class="navbar">
    <a href="/home" class="nav-item">Back</a>
    
</div>
<div class="right-panel">
          
          <table class="task-table">
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
</body>
</html>