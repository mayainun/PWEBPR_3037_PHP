<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FITNES MEMBER</title>
    <link href="member.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script>
        function confirmLogout() {
            var result = confirm("Apakah Anda yakin ingin logout?");
            if (result) {
                window.location.href = "logout.php";
            } else {
            }
        }
    </script>
</head>
<body>
    <div class="main">
        <div class="sidebar">
            <h1 class="margin-top">Aero Gym</h1>
            <div class="sidebar-item">
                <a href="dashboard.php">Dashboard</a>
            </div>
            <div class="sidebar-item">
                <a href="member.php">Member</a>
            </div>
            <button onclick="confirmLogout()" class="logout-btn">LogOut</button>
        </div>
        <div class="content">
        <div class="header">
            <h1></h1>
        </div>
        <div class="data">
            <div class="members-container">
                <?php
                require 'koneksi.php';

                $query = "SELECT * FROM tbl_member";
                $result = mysqli_query($conn, $query);

                if ($result) {
                    if (mysqli_num_rows($result) > 0) {
                        echo "<div class='members-group'>";
                        $count = 0;
                        while ($row = mysqli_fetch_assoc($result)) {
                            if ($count % 2 == 0 && $count != 0) {
                                echo "</div><div class='members-group'>";
                            }
                            echo "<div class='member-container'>";
                            echo "<div class='member-profile'><img src='img/" . $row["profil"] . "'></div>";
                            echo "<div class='member-info'>";
                            echo "<p>Nama: " . $row["nama"] . "</p>";
                            echo "<p>No.Telepon:   " . $row["no_telepon"] . "</p>";
                            echo "<p>Status Member: " . $row["status_member"] . "</p>";
                            echo "</div>";
                            echo "</div>";
                            $count++;
                        }
                        echo "</div>";
                    } else {
                        echo "<p>Tidak ada data dalam tabel</p>";
                    }
                } else {
                    echo "<p>Terjadi kesalahan dalam menjalankan query: " . mysqli_error($conn) . "</p>";
                }

                mysqli_close($conn);
                ?>
            </div>
        </div>
    </div>
</body>
</html>
