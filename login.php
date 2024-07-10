<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Food Delivery Login</title>
<style>body {
        
        
        background-color: #ebf2ff;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }
    
    .login-container {
        background-color: #fff;
        padding: 60px;
        border-radius: 10px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        width: 400px;
        text-align: center;
    }
    
    .login-container h2 {
        font-family: 'Roboto', sans-serif;
        margin-bottom: 30px;
        font-size: 30px;
    }
    
    .login-container input[type="text"],
    .login-container input[type="password"] {
        width: 100%;
        padding: 15px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 8px;
        box-sizing: border-box;
        font-size: 18px;
    }
    
    .login-container input[type="submit"] {
        width: 100%;
        background-color: #ff5733;
        color: #fff;
        border: none;
        padding: 15px;
        border-radius: 8px;
        cursor: pointer;
        font-weight: bold;
        text-transform: uppercase;
        font-size: 20px;
    }
    .account{
        font-family: 'Roboto', sans-serif;
        text-decoration: none;
        color: rgb(9, 168, 231);
    }
    .account:hover {
        color: rgb(9, 168, 231); 
    }
    #php_message{
        color:red;
    }
    </style>
</head>
<body>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $conn = mysqli_connect('localhost', 'root', '', 'zomato');
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);

        // Hash the password for comparison
        $hashed_password = md5($password);

        $sql = "SELECT * FROM register WHERE username='$username' AND password='$hashed_password'";
        $result = mysqli_query($conn, $sql);
    
        if (!$result) {
            echo "Error: " . mysqli_error($conn);
        } 
        if (mysqli_num_rows($result) == 1) {
            // Start the session
            session_start();
            // Set session variables
            $_SESSION['username'] = $username;
            // Redirect to index-2.php
            header("Location: index-2.php");
            exit();
        } else {
            $message = "Invalid username or password";
        }

        mysqli_close($conn);
    }
    ?>

<div class="login-container">
    <h2>Welcome Back</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="submit" value="Login">
        <h3><p>Don't have an account? <a href="register.php" class="account">Register now</p></h3>
    </form>
    <div id="php_message"><?php  echo isset($message) ? $message : '' ;?></div>
</div>
</body>
</html>
