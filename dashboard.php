<?php
require_once 'config/database.php';
require_once 'includes/auth_functions.php';

session_start();
if (!isLoggedIn()) {
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>BFA - Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php include 'includes/header.php'; ?>
    
    <div class="container mt-5">
        <h2>Welcome, <?= htmlspecialchars($_SESSION['username']) ?>!</h2>
        <p>Your role: <?= htmlspecialchars($_SESSION['role']) ?></p>
        
        <div class="mt-4">
            <h4>Quick Actions</h4>
            <div class="d-grid gap-2 d-md-block">
                <a href="#" class="btn btn-primary">View Equipment</a>
                <a href="#" class="btn btn-secondary">Request Support</a>
                <a href="logout.php" class="btn btn-danger">Logout</a>
            </div>
        </div>
    </div>
</body>
</html>