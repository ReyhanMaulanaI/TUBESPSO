<?php
session_start();

function requireAuth()
{
    if (!isset($_SESSION['user_id'])) {
        header('Location: ../php/login.php');
        exit;
    }
}

function requireAdmin()
{
    requireAuth();
    if ($_SESSION['role'] !== 'admin') {
        die('Akses ditolak.');
    }
}
?>