<?php
$link = mysqli_connect("db", "root", "kali", "exam_db");

// Авто-создание таблиц при первом запуске
mysqli_query($link, "CREATE TABLE IF NOT EXISTS users (id INT AUTO_INCREMENT PRIMARY KEY, username VARCHAR(50), password VARCHAR(50))");
// Добавляем администратора для задания
$check = mysqli_query($link, "SELECT * FROM users WHERE username='Administrator'");
if (mysqli_num_rows($check) == 0) {
    mysqli_query($link, "INSERT INTO users (username, password) VALUES ('Administrator', 'P@ssw0rd_Admin_2026')");
}
?>