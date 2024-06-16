<?php
session_start();
if (!isset($_SESSION['user']) || $_SESSION['user']['email'] !== 'admin@example.com') {
    header('Location: index.html');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Admin Dashboard</h1>
    </header>
    
    <main>
        <section>
        <h2 class="lo2">Manage Employee Points</h2>
        <form action="update_points.php" method="post">
            <label for="email">Employee Email:</label>
            <input type="email" id="email" name="email" required>
            <label for="points">Points to Add:</label>
            <input type="number" id="points" name="points" required>
            <button type="submit">Update Points</button>
        </form>
       </section>
    </main>

    <footer>
        <p>&copy; 2024 Employee Benefits, Inc. All rights reserved.</p>
    </footer>
</body>
</html>
