<?php
require_once 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Tangani pengunggahan gambar
    if ($_FILES['profil']['error'] === UPLOAD_ERR_OK) {
        $profil = $_FILES['profil']['name'];
        $profil_tmp = $_FILES['profil']['tmp_name'];
        $upload_path = 'img/'; // Path folder img, sesuaikan dengan struktur folder Anda

        // Pindahkan file yang diunggah ke folder img
        if (move_uploaded_file($profil_tmp, $upload_path . $profil)) {
            // File berhasil diunggah, lanjutkan dengan penyimpanan data ke database

            // Query untuk menyimpan data ke database
            $nama = $_POST['nama'];
            $no_telepon = $_POST['no_telepon'];
            $status_member = $_POST['status_member'];

            $insert_query = "INSERT INTO tbl_member (profil, nama, no_telepon, status_member) 
                             VALUES ('$profil', '$nama', '$no_telepon', '$status_member')";

            if (mysqli_query($conn, $insert_query)) {
                mysqli_close($conn);
                header("Location: dashboard.php");
                exit(); // Penting untuk menghentikan eksekusi lebih lanjut setelah mengarahkan pengguna kembali
            } else {
                echo "Error: " . mysqli_error($conn);
            }
        } else {
            echo 'Gagal mengunggah file.';
            exit();
        }
    } else {
        echo 'Terjadi kesalahan saat mengunggah file.';
        exit();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Data</title>
    <link href="edit.css" rel="stylesheet">
</head>
<body>
    <div class="main">
        <div class="content">
            <div class="header">
                <h1>Tambah Data</h1>
            </div>
            <form id="addForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" enctype="multipart/form-data">
                <div class="data">
                    <table>
                        <tr>
                            <td>Profil</td>
                            <td><input type="file" name="profil"></td>
                        </tr>
                        <tr>
                            <td>Nama</td>
                            <td><input type="text" name="nama"></td>
                        </tr>
                        <tr>
                            <td>No Telepon</td>
                            <td><input type="text" name="no_telepon"></td>
                        </tr>
                        <tr>
                            <td>Status Member:</td>
                            <td>
                                <select name="status_member">
                                    <option value="AKTIF">AKTIF</option>
                                    <option value="NON-AKTIF">NON-AKTIF</option>
                                </select>
                            </td>
                        </tr>
                    </table>
                    <button type="submit">Submit</button>
                    <button type="button" class="cancel">Cancel</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        // Tambahkan event listener untuk tombol "Cancel"
        document.querySelector('.cancel').addEventListener('click', function() {
            // Arahkan pengguna kembali ke halaman dashboard.php
            window.location.href = 'dashboard.php';
        });
    </script>
</body>
</html>
