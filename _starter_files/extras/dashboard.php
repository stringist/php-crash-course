<?php
session_start();

if (isset($_SESSION['username'])) {
    echo "<h1> Welcome $_SESSION[username]!</h1>";
    echo '<a href="logout.php">Logout</a>';
} else {
    echo '<h1>Welcome guest</h1>';
    echo '<a href="/php-crash-course/_starter_files/13_sessions.php">Home</a>';
}