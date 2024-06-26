<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FITNES MEMBER</title>
    <link rel="stylesheet" href="views/asset/css/register.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="wrapper">
        <form action="/register" method="POST">
            <h1>Registrasi</h1>
            <div class="input-box">
                <input id="nama_lengkap" type="text" name="nama_lengkap" placeholder="Nama Lengkap" required>
                <i class='bx bxs-universal-access'></i>
            </div>
            <div class="input-box">
                <input id="no_telepon" type="text" name="no_telepon" placeholder="No. Telepon" required>
                <i class='bx bxs-phone-call'></i>
            </div>
            <div class="input-box">
                <input id="username" type="text" name="username" placeholder="Username" required>
                <i class='bx bx-user'></i>
            </div>
            <div class="input-box">
                <input id="password" type="password" name="password" placeholder="Password" required>
                <i class='bx bxs-lock-alt'></i>
            </div>
            <button type="submit" class="btn">Simpan</button>
        </form>
    </div>
</body>
</html>
