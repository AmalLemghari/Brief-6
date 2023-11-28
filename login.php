<?php
include "config.php";
session_start();

// if (!isset($_SESSION['id'])) {
//     header('location: welcome.php');
//     exit;
// }

$error = "";
$email_error = "";
$password_error = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Basic validation
    if (!empty(trim($email))) {
        $email = trim($email);
    } else {
        $email_error = "Please enter your email";
    }

    if (!empty(trim($password))) {
        $password = trim($password);
    } else {
        $password_error = "Please enter your password";
    }

    // Make user login if correct details entered
    if (empty($email_error) && empty($password_error) && empty($error)) {
        $select = "SELECT * FROM signup WHERE email = :email AND password = :password";
        $stmt = $conn->prepare($select);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);
        $stmt->execute();

        if ($stmt->rowCount() == 1) {
            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            $_SESSION['id'] = $result['id'];
            $_SESSION['username'] = $result['username'];
            $_SESSION['email'] = $result['email'];
            $_SESSION['loggedin'] = true;

            header('location: welcome.php');
        } else {
            $error = "Incorrect details";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DataWare</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>

<div class="box">
    <h2>Login</h2>
    <form action="#" method="post">
        
    <?php if (!empty($error)) : ?>
          <p class="error"><?= $error; ?></p>
        <?php endif; ?>

        <div class="input_box">
            <input type="text" name="email" placeholder="Email Id" >
        </div>
        <?php if (!empty($email_error)) : ?>
          <p class="error"><?= $email_error; ?></p>
        <?php endif; ?>
        
        <div class="input_box">
            <input type="text" name="password" placeholder="Password" >
        </div>
        <?php if (!empty($password_error)) : ?>
          <p class="error"><?= $password_error; ?></p>
        <?php endif; ?>



        <button type="submit">Login</button>

        <div class="links">Don't have an account? <a href="signup.php">Sign Up </a></div>
    </form>
</div>    

</body>
</html>
