<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Member</title>
    <link href="/views/asset/css/edit.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <div class="main">
        <div class="content">
            <div class="header">
                <h1>Edit Data</h1>
            </div>
            <form action="/updatemember/<?= $data[0]['ID'] ?>" method="POST" enctype="multipart/form-data">
                <div class="data">
                    <table>
                    <tr>
                        <td>Profil</td>
                        <td><input type="file" name="profil" value="<?php echo $data[0]['profil']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td><input type="text" name="nama" value="<?php echo $data[0]['nama']; ?>"></td>
                    </tr>
                    <tr>
                        <td>No Telepon</td>
                        <td><input type="text" name="no_telepon" value="<?php echo $data[0]['no_telepon']; ?>"></td>
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
            window.location.href = '/member';
        });
    </script>
</body>
</html>