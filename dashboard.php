<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Fitness Website</title>
        <link href="assets/css/styles.css" rel="stylesheet">
    </head>
    <body>
        <div class="main">
            <div class="sidebar">
                <h1 class="margin-top">Aero Gym</h1>
                <div class="sidebar-item">
                    <a href="#">Home</a>
                </div>
                <div class="sidebar-item">
                    <a href="#">Member</a>
                </div>
                <div class="sidebar-item">
                    <a href="#">Settings</a>
                </div>
                <a href="#" class="logout-btn">Logout</a>
            </div>
            <div class="content">
                <div class="header">
                    <h1>Dashboard</h1>
                </div>
                <div class="data">
                    <h2>Member Gym <button class="btn-tambah">Tambah Data</button></h2>
                    <table>
                        <tr>
                            <th>ID</th>
                            <th class="border-left">Nama</th>
                            <th class="border-left">No Telepon</th>
                            <th class="border-left">Status Member</th>
                            <th class="border-left">Aksi</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Jacob</td>
                            <td>08875454878</td>
                            <td>Aktif</td>
                            <td>
                                <button class="btn-edit">Edit</button>
                                <button class="btn-delete">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Jack</td>
                            <td>0887878787</td>
                            <td>Nonaktif</td>
                            <td>
                                <button class="btn-edit">Edit</button>
                                <button class="btn-delete">Delete</button>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>