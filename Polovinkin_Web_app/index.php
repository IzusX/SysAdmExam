<?php
require_once('db.php');
if (!isset($_COOKIE['User'])) {
    header("Location: login.php");
    exit();
}
?>
<h1>Привет, <?php echo $_COOKIE['User']; ?>!</h1>
<a href="logout.php">Выйти</a>