welcome.php
<?php
session_start();
if (!isset($_SESSION['user_email'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Welcome</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="form-container">
    <h2>Welcome to the Metropolitan Student Portal</h2>
    <p>Hello, <?php echo htmlspecialchars($_SESSION['user_email']); ?>!</p>
    <a href="logout.php" class="logout-btn">Logout</a>
</div>
</body>
</html>
