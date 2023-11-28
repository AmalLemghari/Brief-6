<?php
include "config.php";

$last_name_user_error = "";
$first_name_user_error = "";
$email_error = "";
$password_error = "";
$confirm_password_error = "";
$number_error = "";
$date_added_error = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $last_name_user  = $_POST['last_name_user'];
    $first_name_user  = $_POST['first_name_user'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $number = $_POST['number'];
    $date_added = date('Y-m-d H:i:s');

    // Username validation
    if (!empty($last_name_user)) {
        if (strlen($last_name_user) <= 50) {
            $last_name_user = trim($last_name_user);
        } else {
            $last_name_user_error = "Last name must be less than or equal to 50 characters";
        }
    } else {
        $last_name_user_error = "Last name cannot be blank";
    }

    if (!empty($first_name_user)) {
        if (strlen($first_name_user) <= 50) {
            $first_name_user = trim($first_name_user);
        } else {
            $first_name_user_error = "First name must be less than or equal to 50 characters";
        }
    } else {
        $first_name_user_error = "First name cannot be blank";
    }

    // Email validation
    if (!empty($email)) {
        if (strlen($email) <= 50) {
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

                $email_check = "SELECT * FROM signup WHERE email = :email";
                $stmt = $conn->prepare($email_check);
                $stmt->bindParam(':email', $email);
                $stmt->execute();

                if ($stmt->rowCount() == 1) {
                    $email_error = "Email already exists";
                }
            } else {
                $email_error = "Please enter a valid email";
            }
        } else {
            $email_error = "Email must be less than or equal to 50 characters";
        }
    } else {
        $email_error = "Email cannot be blank";
    }

    // Password validation
    if (!empty(trim($password))) {
        if (strlen($password) >= 8 && strlen($password) <= 16) {
            $password = trim($password);
        } else {
            $password_error = "Password must be between 8 and 16 characters";
        }
    } else {
        $password_error = "Password cannot be blank";
    }

    // Confirm password validation
    if (!empty(trim($confirm_password))) {
        if ($password === $confirm_password) {
            $confirm_password = trim($confirm_password);
        } else {
            $confirm_password_error = "Passwords do not match";
        }
    } else {
        $confirm_password_error = "Confirm password cannot be blank";
    }
    // Number

    // Date Added

    // Insert data if no error occurs
    if (empty($last_name_user_error) && empty($first_name_user_error) && empty($email_error) && empty($password_error) && empty($confirm_password_error) && empty($number_error) && empty($date_added_error)) {

        $insert = "INSERT INTO signup (last_name, first_name, email, password) VALUES (:last_name, :first_name, :email, :password)";
        $stmt = $conn->prepare($insert);
        $stmt->bindParam(':last_name', $last_name);
        $stmt->bindParam(':first_name', $first_name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);
        

        if ($stmt->execute()) {
            header('location: loging.php');
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
    <link rel="stylesheet" href="signup.css">
</head>
<body>

<div class="box">
    <h2>Sign Up</h2>
    <form action="#" method="post">
        
        <div class="input_box">
            <input type="text" placeholder="last name"  name="last_name" >
        </div>
        <?php if (!empty($last_name_error)) : ?>
          <p class="error"><?= $last_name_error; ?></p>
        <?php endif; ?>

        <div class="input_box">
            <input type="text" placeholder="first name"  name="first_name" >
        </div>
        <?php if (!empty($first_name_error)) : ?>
          <p class="error"><?= $first_name_error; ?></p>
        <?php endif; ?>


        <div class="input_box">
            <input type="text" placeholder="Email Id" name="email" >
        </div>
        <?php if (!empty($email_error)) : ?>
          <p class="error"><?= $email_error; ?></p>
        <?php endif; ?>


        <div class="input_box">
            <input type="text" placeholder="Create Password" name="password" >
        </div>
        <?php if (!empty($password_error)) : ?>
          <p class="error"><?= $password_error; ?></p>
        <?php endif; ?>


        <div class="input_box">
            <input type="text" placeholder="Confirm Password" name="confirm_password" >
        </div>
        <?php if (!empty($confirm_password_error)) : ?>
          <p class="error"><?= $confirm_password_error; ?></p>
        <?php endif; ?>

        <div class="input_box">
            <input type="number" placeholder="number" name="number" >
        </div>
        <?php if (!empty($number_error)) : ?>
          <p class="error"><?= $confirm_password_error; ?></p>
        <?php endif; ?>

        <div class="input_box">
            <input type="text" placeholder="Confirm Password" name="confirm_password" >
        </div>
        <?php if (!empty($confirm_password_error)) : ?>
          <p class="error"><?= $confirm_password_error; ?></p>
        <?php endif; ?>


        <button type="submit">Create Account</button>

        <div class="links">Already have an account? <a href="login.php">Login</a></div>
    </form>
</div>    

</body>
</html>
