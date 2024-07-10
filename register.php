    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="header.css">
        <link rel="stylesheet" href="register.css">
        <title>Register Page</title>
    </head>
    <body>

    <div class="container">
        <h2>Register</h2>
        <form action="#" method="post">
            <input type="text" name="full_name" placeholder="Full Name" required>
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Register</button>
        </form>
    </div>  

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $full_name = $_POST['full_name'];
        $username = $_POST['username'];
        $password = md5($_POST['password']);
                                                                            
        $conn = mysqli_connect('localhost', 'root', '', 'zomato') or die(mysqli_error());

        $sql = "INSERT INTO register (full_name, username, password) VALUES ('$full_name', '$username', '$password')";

        $res = mysqli_query($conn, $sql) or die(mysqli_error($conn));

        if ($res) {
            header("location: login.php");
            exit();
        } else {
            echo "Failed";
        }
    }
    ?>

    </body>
    </html>
