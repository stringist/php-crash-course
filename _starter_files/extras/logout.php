<?php
session_start();
session_destroy();
header('Location: /php-crash-course/_starter_files/13_sessions.php');