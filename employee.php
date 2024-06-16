<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('Location: index.html');
    exit;
}

$user = $_SESSION['user'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Welcome, <?php echo $user['name']; ?></h1>
    </header>
    
    <main>
        <h2>Your Benefits</h2>
        <p>You have <?php echo $user['points']; ?> points.</p>
        <ul>
            <?php if ($user['points'] >= 100): ?>
                <li>Movie Tickets</li>
            <?php endif; ?>
            <?php if ($user['points'] >= 200): ?>
                <li>Salary Hike</li>
            <?php endif; ?>
            <?php if ($user['points'] >= 300): ?>
                <li>Family Tour Tickets</li>
            <?php endif; ?>
        </ul>
    </main>

    <footer>
        <p>&copy; 2024 Employee Benefits, Inc. All rights reserved.</p>
