<!-- register.php -->

<?php include '../includes/header.php'; ?>

<h1>Register</h1>

<form action="" method="POST">
    <input type="text" name="username" placeholder="Username" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit" name="register">Register</button>
</form>

<?php include '../includes/footer.php'; ?>