<?php

require_once 'dbFuncs.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = trim($_POST["first name"]);
    $lname = trim($_POST["last name"]);
    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);

    // Validate inputs
    if (empty($fname) || empty($lname) || empty($email) || empty($password)) {
        $error = "All fields are required!";
    } else {
        try {
            $pdo = connectDB(); 
            $query = "SELECT * FROM students WHERE email = :email";
            $stmt = $pdo->prepare($query);
            $stmt->execute(['email' => $email]);

            if ($stmt->rowCount() > 0) {
                $error = "Email is already registered!";
            } else {
                // Hash password
                $hashed_password = sha1($password); 
                
                // Insert user into the db
                $query = "INSERT INTO students (name, email, password, level) VALUES (:name, :email, :password, 1)";
                $stmt = $pdo->prepare($query);
                $stmt->execute([
                    'first name' => $fname,
                    'last name' => $lname,
                    'email' => $email,
                    'password' => $hashed_password
                ]);
                
                // Redirect to login page 
                header("Location: login.php?signup=success");
                exit;
            }
        } catch (PDOException $e) {
            $error = "Error: " . $e->getMessage();
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
</head>
<style type="text/css">
    body {
        background: linear-gradient(to bottom, #fff9f9, #ffeaea);
      }

   
      .btn {
        text-align: center;
        text-decoration: none;
        background-color: #D32F2F;
        color: white;
        padding: 12px 25px;
        border-radius: 10px;
        font-size: 18px;
        font-weight: bold;
        transition: background 0.3s ease, transform 0.2s ease;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      }


      .btn:hover{
        background-color: #c21818; 
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.15); 
      }

      a {
        color: #D32F2F;
      }
      
      
</style>
<body>
    <div class="container">
        <br><br>
        <h2>Sign Up</h2>
        <?php if (isset($error)) echo "<p class='text-danger'>$error</p>"; ?>
        
        <form action="signup.php" method="POST"> <!-- form requiring name, email, and password -->
            <div class="form-group">
                <label for="fname">First Name:</label>
                <input type="text" name="fname" class="form-control" id="fname" placeholder="Enter first name">
            </div>
            <div class="form-group">
                <label for="lname">Last Name:</label>
                <input type="text" name="lname" class="form-control" id="lname" placeholder="Enter last name">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="phone" name="phone" class="form-control" id="phone" placeholder="Enter phone">
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Password">
            </div>
            <button type="submit" class="btn">Sign Up</button>
        </form>

        <br>
        <p>Already have an account? Login <a href="login.php">here</a></p> <!-- give the user the option to go to login page if they have already signed up -->
        <a href="./index.php">Back To Home</a> <!-- button to go back to menus page -->
    </div>
</body>
</html>
