<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="dashboard.php">BFA Portal</a>
        <div class="navbar-nav">
            <span class="nav-item nav-link">Welcome, <?= htmlspecialchars($_SESSION['username']) ?></span>
            <a class="nav-item nav-link" href="logout.php">Logout</a>
            <?php if (isAdmin()): ?>
            <a class="nav-item nav-link" href="admin.php">Admin Panel</a>
            <?php endif; ?>
        </div>
    </div>
</nav>