<?php
require './function/connect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./src/css/bootstrap.min.css">
    <script src="./src/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./src/css/style.css">
    <title>CRUD</title>
</head>

<body class="bg-light">
    <div class="container-fluid p-5">
        <div class="bg-white shadow rounded p-4">
            <form action="function/create.php" method="post" enctype="multipart/form-data">

                <header class="d-flex align-items-center justify-content-between mx-4 mb-4">
                    <p class="h3">Tambah Data</p>
                    <a href="./index.php" class="btn btn-primary">Lihat Semua Data</a>
                </header>

                <?php
                if (isset($_GET['pesan'])) {
                    $pesan = $_GET['pesan'];
                    if ($pesan == 'gagal') {
                        echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                        Data Tidak Boleh Kosong
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                    </div>";
                    } elseif ($pesan == 'duplikat') {
                        echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
            Username Sudah Digunakan
            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
        </div>";
                    } else {
                        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                        Data Berhasil Ditambah
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                    </div>";
                    }
                }
                ?>

                <div class="mb-3" style="width: 500px;">
                    <label class="form-label" for="username">Username</label>
                    <input class="form-control" type="text" name="username" id="username" autocomplete="off">
                </div>

                <div class="mb-3" style="width: 500px;">
                    <label class="form-label" for="name">Name</label>
                    <input class="form-control" type="text" name="name" id="name" autocomplete="off">
                </div>

                <div class="mb-3" style="width: 500px;">
                    <label class="form-label" for="name">Gender</label>
                    <select class="form-select" name="jk" id="jk">
                        <option selected>Choose the gender</option>
                        <option disabled>-----------------------------</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>

                <div class="mb-3" style="width: 500px;">
                    <label class="form-label" for="name">Born</label>
                    <input class="form-control" type="date" name="ttl" id="ttl">
                </div>

                <div class="mb-3 d-flex flex-column" style="width: 500px;">
                    <label class="form-label" for="address">Address</label>
                    <textarea class="form-control" name="address" id="address"></textarea>
                </div>

                <div class="mb-3" style="width: 500px;">
                    <label class="form-label" for="email">Email</label>
                    <input class="form-control" type="email" name="email" id="email">
                </div>

                <div class="mb-3" style="width: 500px;">
                    <label class="form-label" for="no_telp">No Telepon</label>
                    <input class="form-control" type="text" name="no_telp" id="no_telp" autocomplete="off">
                </div>

                <button class="btn btn-success" type="submit">Simpan Data</button>
            </form>
        </div>
    </div>
</body>

</html>