<?php
session_start();
if (!isset($_SESSION['id'])) {
    header('location: login.php');
    exit;
}

include "config.php";

// Fetch user details from the database
try {
    $id = $_SESSION['id'];

    $stmt = $conn->prepare("SELECT * FROM signup WHERE id = :id");
    $stmt->bindParam(':id', $id);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
</head>
<body>
    <?php if ($result) : ?>
        <h1>Name = <?php echo htmlspecialchars($result['username']); ?></h1>
        <h2>Id = <?php echo htmlspecialchars($result['id']); ?></h2>
        <h2>Email Id = <?php echo htmlspecialchars($result['email']); ?></h2>
        <br>
        <h2><a href="logout.php">Logout</a></h2>
    <?php else : ?>
        <p>Error fetching user details.</p>
    <?php endif; ?>
</body>
</html>
