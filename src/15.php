<?php
// Initialize session
session_start();
if (!isset($_SESSION['username'])) {
    // Redirect to login page
    header("Location: https://example.com/login");
    exit();
}
?>
