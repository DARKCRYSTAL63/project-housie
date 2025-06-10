<?php
session_start();
session_unset();
session_destroy();
header("Location: login.html"); // Make sure your login page is named login.html
exit();
?>
