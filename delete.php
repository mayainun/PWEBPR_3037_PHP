<?php
// Memastikan bahwa parameter id diberikan dan merupakan angka
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    require_once 'koneksi.php';

    // Mendapatkan ID dari URL
    $id = $_GET['id'];

    // Query untuk menghapus data dari database berdasarkan ID
    $delete_query = "DELETE FROM tbl_member WHERE ID = $id";

    // Eksekusi query penghapusan
    if (mysqli_query($conn, $delete_query)) {
        mysqli_close($conn);
        header("Location: dashboard.php");
        exit();
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
} else {
    // Jika parameter id tidak ada atau tidak valid, redirect ke dashboard
    header("Location: dashboard.php");
    exit();
}
?>
