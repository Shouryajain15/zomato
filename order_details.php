<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Order Details</title>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
<style>
    body {
        font-family: 'Roboto', sans-serif;
        background-color: #ebf2ff;
        margin: 0;
        padding: 0;
    }

    .container {
        max-width: 800px;
        margin: 20px auto;
        padding: 20px;
        background-color: #fff; 
        border-radius: 10px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1); 
    }

    h1 {
        color: #333; 
        margin-bottom: 20px;
        text-align: center;
        text-transform: uppercase;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
    }

    th, td {
        padding: 12px;
        border-bottom: 1px solid #ddd; 
        text-align: left;
    }

    th {
        background-color: #4CAF50; 
        color: #fff; 
        font-weight: bold;
    }

    td {
        color: #333; 
    }

    .back-button {
        background-color: #4CAF50; 
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 5px; 
        cursor: pointer;
        font-size: 16px;
        transition: background-color 0.3s ease;
    }

    .back-button:hover {
        background-color: #45a049; 
    }

    .footer {
        text-align: center;
        margin-top: 20px;
        color: #777; 
    }
</style>
</head>
<body>

<div class="container">
    <h1>Order confirm</h1>
    <?php
    // Establishing a connection to the database
    $conn = mysqli_connect('localhost', 'root', '', 'zomato') or die(mysqli_error());

    // SQL query to retrieve user information
    $sql = "SELECT * FROM zomato ORDER BY id DESC LIMIT 1"; // Assuming 'id' is the primary key

    // Executing the query
    $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));

    // Checking if there are any results
    if (mysqli_num_rows($result) > 0) {
        // Outputting user information in a table
        echo "<table>";
        echo "<tr><th>Field</th><th>Value</th></tr>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>Full Name</td><td>" . $row['full_name'] . "</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>Email</td><td>" . $row['email'] . "</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>Contact Number</td><td>" . $row['contact_number'] . "</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>Delivery Address</td><td>" . $row['address'] . "</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>Food Item</td><td>" . $row['food_item'] . "</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>Quantity</td><td>" . $row['quantity'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "<p style='color: red;'>No orders found.</p>";
    }
    ?>
    <div style="text-align: center;">
        <a href="index-2.php"><button class="back-button" >home</button></a>
    </div>
</div>

<div class="footer">
    &copy; 2024 Order Details. All rights reserved.
</div>

</body>
</html>
