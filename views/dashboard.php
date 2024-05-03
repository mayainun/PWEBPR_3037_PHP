<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FITNES MEMBER</title>
    <link href="/views/asset/css/styles.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script>
        function confirmLogout() {
            var result = confirm("Apakah Anda yakin ingin logout?");
            if (result) {
                window.location.href = "/";
            } else {}
        }
    </script>
</head>

<body>
    <div class="main">
        <div class="sidebar">
            <?php include 'views/components/nav-item.php'?>
            <button onclick="confirmLogout()" class="logout-btn">LogOut</button>
        </div>
        <div class="content">
            <div class="header">
                <h1>Dashboard</h1>
            </div>
            <form action="dashboard.php" method="POST">
                <div class="data">
                    <h2>Member Gym <a href="/membercreate" class="btn-tambah">Tambah Data</a></h2>
                    <table>
                        <tr>
                            <th class="border-left">ID</th>
                            <th class="border-left">Profil</th>
                            <th class="border-left">Nama</th>
                            <th class="border-left">No Telepon</th>
                            <th class="border-left">Status Member</th>
                            <th class="border-left">Aksi</th>
                        </tr>
                        <?php
                        if ($data) {
                            for ($i = 0; $i < count($data); $i++) {
                                echo "<tr>";
                                echo "<td>" . $data[$i]["ID"] . "</td>";
                                echo "<td><img src='views/asset/img/" . $data[$i]["profil"] . "'></td>";
                                echo "<td>" . $data[$i]["nama"] . "</td>";
                                echo "<td>" . $data[$i]["no_telepon"] . "</td>";
                                echo "<td>" . $data[$i]["status_member"] . "</td>";
                                echo "<td>";
                                echo "<a href='/memberupdate/" . $data[$i]["ID"] . "' class='btn-edit'><i class='bx bxs-edit-alt'></i></a>";
                                echo " | ";
                                echo "<a href='/deletemember/" . $data[$i]["ID"] . "' class='btn-delete'><i class='bx bxs-trash-alt'></i></a>";
                                echo "</td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td colspan='6'>Tidak ada data dalam tabel</td></tr>";
                        }
                        ?>

                    </table>
                </div>
            </form>
        </div>
    </div>
</body>

</html>