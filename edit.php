<?php
require_once 'koneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "SELECT * FROM tbl_member WHERE ID = '$id'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);
            $profil = $row['profil'];
            $nama = $row['nama'];
            $no_telepon = $row['no_telepon'];
            $status_member = $row['status_member'];
        } else {
            header("Location: dashboard.php");
            exit();
        }
    } else {
        echo "Error: " . mysqli_error($conn);
        exit();
    }
} else {
    header("Location: dashboard.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Tangani pengunggahan file profil
    if ($_FILES['profil']['error'] === UPLOAD_ERR_OK) {
        $new_profil = $_FILES['profil']['name'];
        $new_profil_tmp = $_FILES['profil']['tmp_name'];
        $upload_path = 'img/'; // Path folder img, sesuaikan dengan struktur folder Anda

        // Pindahkan file yang diunggah ke folder img
        if (move_uploaded_file($new_profil_tmp, $upload_path . $new_profil)) {
            // File berhasil diunggah, lanjutkan dengan pembaruan data di database

            // Tangani pembaruan data di database
            $new_nama = $_POST['nama'];
            $new_no_telepon = $_POST['no_telepon'];
            $new_status_member = $_POST['status_member'];

            $update_query = "UPDATE tbl_member SET profil='$new_profil', nama='$new_nama', no_telepon='$new_no_telepon', status_member='$new_status_member' WHERE ID='$id'";

            if (mysqli_query($conn, $update_query)) {
                header("Location: dashboard.php");
                exit();
            } else {
                echo "Error updating record: " . mysqli_error($conn);
            }
        } else {
            echo 'Gagal mengunggah file.';
            exit();
        }
    } else {
        // Tangani pembaruan data di database jika tidak ada file yang diunggah
        $new_nama = $_POST['nama'];
        $new_no_telepon = $_POST['no_telepon'];
        $new_status_member = $_POST['status_member'];

        $update_query = "UPDATE tbl_member SET nama='$new_nama', no_telepon='$new_no_telepon', status_member='$new_status_member' WHERE ID='$id'";

        if (mysqli_query($conn, $update_query)) {
            header("Location: dashboard.php");
            exit();
        } else {
            echo "Error updating record: " . mysqli_error($conn);
        }
    }
}

mysqli_close($conn);
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Member</title>
    <link href="edit.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <div class="main">
        <div class="content">
            <div class="header">
                <h1>Edit Data</h1>
            </div>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"] . "?id=" . $id); ?>" method="POST" enctype="multipart/form-data">
                <div class="data">
                    <table>
                    <tr>
                        <td>Profil</td>
                        <td><input type="file" name="profil" value="<?php echo $profil; ?>"></td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td><input type="text" name="nama" value="<?php echo $nama; ?>"></td>
                    </tr>
                    <tr>
                        <td>No Telepon</td>
                        <td><input type="text" name="no_telepon" value="<?php echo $no_telepon; ?>"></td>
                    </tr>
                    <tr>
                        <td>Status Member</td>
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
