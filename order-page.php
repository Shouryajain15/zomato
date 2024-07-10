<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Order Form</title>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="order-page.css">
</head>
<body>

<div class="container">
    <h2>Place Your Order</h2>
    <form action="#" method="post">
        <label for="name">Your Name</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Your Email</label>
        <input type="email" id="email" name="email" required>

        <label for="contactNumber">Contact Number</label>
        <input type="text" id="contactNumber" name="contactNumber" required>

        <label for="address">Delivery Address</label>
        <textarea id="address" name="address" required></textarea>

        <label for="foodItem">Select Food Item</label>
        <select id="foodItem" name="foodItem" required>
            <option value="" disabled selected>Select Food Item</option>
            <option value="Pizza Margherita">Pizza Margherita</option>
            <option value="Assorted Sushi Platter">Assorted Sushi Platter</option>
            <option value="Classic Cheeseburger">Classic Cheeseburger</option>
            <option value="Spaghetti Carbonara">Spaghetti Carbonara</option>
            <option value="Beef Tacos">Beef Tacos</option>
            <option value="Greek Salad">Greek Salad</option>
            <option value="Chocolate Sundae">Chocolate Sundae</option>
        </select>

        <label for="quantity">Quantity</label>
        <input type="text" id="quantity" name="quantity" required>

        <div class="checkbox-group">
            
            <label for="agreeTerms">I agree to the terms and conditions</label>
        </div>

        <input type="submit" value="Proceed to Order ">
    </form>
</div>


<?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $name = $_POST['name'];
      $email = $_POST['email'];
      $contactNumber = $_POST['contactNumber'];
      $address = $_POST['address'];
      $foodItem = $_POST['foodItem']; 
      $quantity = $_POST['quantity']; 

      // Establishing a connection to the database
      $conn = mysqli_connect('localhost', 'root', '', 'zomato') or die(mysqli_error());

      // SQL query to insert form data into the 'orders' table
      $sql = "INSERT INTO zomato (full_name, email, contact_number, address, food_item, quantity) 
              VALUES ('$name', '$email', '$contactNumber', '$address', '$foodItem', '$quantity')"; // Corrected variable names

      // Executing the query
      $res = mysqli_query($conn, $sql) or die(mysqli_error($conn));

      // Redirecting to another page after successful submission
      if ($res) {
          header("location: order_details.php");
          exit();
      } else {
          echo "Failed to submit the order.";
      }
  }
?>



</body>
</html>
