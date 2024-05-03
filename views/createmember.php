<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Data</title>
    <link href="views/asset/css/edit.css" rel="stylesheet">
</head>
<body>
    <div class="main">
        <div class="content">
            <div class="header">
                <h1>Tambah Data</h1>
            </div>
            <form id="addForm" action="/createmember" method="POST" enctype="multipart/form-data">
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