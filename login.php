<!-- Include Header -->
<?php include('header.html'); ?>

<main>
    <div class="container">
        <h2>Login</h2>
        <form action="login_process.php" method="post">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
            <button type="submit">Login</button>
        </form>
        <p>Don't have an account? <a href="register.php">Register</a></p>
    </div>
</main>

<!-- Include Footer -->
<?php include('footer.html'); ?>
