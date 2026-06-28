<?php
require_once('db.php');
if (isset($_POST['submit'])) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    mysqli_query($link, "INSERT INTO users (username, password) VALUES ('$user', '$pass')");
    header("Location: login.php");
}
?>
<form method="POST">
    <h2>Registration</h2>
    <input name="user" placeholder="Username" required><br>
    <input name="pass" type="password" placeholder="Password" required><br>
    <button name="submit" type="submit">Register</button>
</form>
<a href="login.php">Login</a>