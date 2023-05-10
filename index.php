<?php
require './function/connect.php'
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" />
    <link rel="stylesheet" href="./src/css/bootstrap.min.css">
    <link rel="stylesheet" href="./src/css/style.css">
    <title>CRUD</title>
</head>

<body class="bg-light">

    <div class="container-fluid p-5">
        <div class="bg-white shadow rounded p-4">
            <?php
            if (isset($_GET['pesan'])) {
                $pesan = $_GET['pesan'];
                if ($pesan == 'duplikat') {
                    echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                    Username Sudah Digunakan
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>";
                } elseif ($pesan == 'edit') {
                    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                    Data Berhasil Diubah
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>";
                } elseif ($pesan == 'failed') {
                    echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                    Data Gagal Diubah
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>";
                } else {
                    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                        Data Berhasil Ditambahkan
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                    </div>";
                }
            }
            ?>
            <a href="create.php" class="btn btn-success mb-4">+ Tambah User</a>
            <table id="tabel-data" class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Username</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Email</th>
                        <th>No Telpon</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    $sql = "SELECT * FROM users";
                    $query = mysqli_query($conn, $sql);
                    while ($data = mysqli_fetch_array($query)) {
                    ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $data["username"]; ?></td>
                        <td><?php echo $data["name"]; ?></td>
                        <td><?php echo $data["address"]; ?></td>
                        <td><?php echo $data["email"]; ?></td>
                        <td><?php echo $data["no_telp"]; ?></td>
                        <td>
                            <div class="d-flex">
                                <a href="detail.php?id=<?php echo $data['id']; ?>"
                                    class="btn btn-warning text-white me-2">Detail</a>
                                <a href="edit.php?id=<?php echo $data['id']; ?>"
                                    class="btn btn-primary text-white me-2">Edit</a>
                                <a href="hapus.php?id=<?php echo $data['id']; ?>"
                                    class="btn btn-danger text-white">Hapus</a>
                            </div>
                        </td>
                    </tr>
                    <?php

                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <script src="./src/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

    <script>
    $(document).ready(function() {
        $('#tabel-data').DataTable();
    });
    </script>

</body>

</html>