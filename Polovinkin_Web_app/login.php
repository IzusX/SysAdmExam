<?php
require_once('db.php');
if (isset($_POST['submit'])) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    // КРИТИЧЕСКАЯ УЯЗВИМОСТЬ: Прямая вставка переменных в запрос
    $sql = "SELECT * FROM users WHERE username='$user' AND password='$pass'";
    $result = mysqli_query($link, $sql);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_array($result);
        setcookie("User", $row['username'], time() + 3600, "/");
        header("Location: index.php");
    } else {
        echo "Ошибка входа!";
    }
}
?>
<form method="POST">
    <h2>Login</h2>
    <input name="user" placeholder="Username" required><br>
    <input name="pass" type="password" placeholder="Password" required><br>
    <button name="submit" type="submit">Login</button>
</form>
<a href="registration.php">Registration</a>