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
            <?php
            $id = $_GET['id'];
            $sql = "SELECT * FROM users WHERE id='$id'";
            $query = mysqli_query($conn, $sql);
            while ($data = mysqli_fetch_array($query)) {
            ?>
            <form method="post" action="./function/edit.php">

                <header class="d-flex align-items-center justify-content-between mx-4 mb-4">
                    <p class="h3">Edit Data</p>
                    <a href="./index.php" class="btn btn-primary">Lihat Semua Data</a>
                </header>

                <div class="mb-3" style="width: 500px;">
                    <label class="form-label" for="">Username</label>
                    <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
                    <input class="form-control" type="text" disabled value="<?php echo $data['username'] ?>"
                        autocomplete="off">
                </div>

                <div class="mb-3" style="width: 500px;">
                    <label class="form-label" for="">Name</label>
                    <input class="form-control" type="text" name="name" value="<?php echo $data['name'] ?>"
                        autocomplete="off">
                </div>

                <div class="mb-3" style="width: 500px;">
                    <label class="form-label" for="name">Gender</label>
                    <select class="form-select" name="jk" id="jk">
                        <option selected><?php echo $data['jk'] ?></option>
                        <option disabled>-----------------------------</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>

                <div class="mb-3" style="width: 500px;">
                    <label class="form-label" for="name">Born</label>
                    <input class="form-control" type="date" name="ttl" id="ttl" value="<?php echo $data['ttl'] ?>">
                </div>

                <div class="mb-3 d-flex flex-column" style="width: 500px;">
                    <label class="form-label" for="address">Address</label>
                    <textarea class="form-control" name="address" id="address"><?php echo $data['address'] ?></textarea>
                </div>

                <div class="mb-3" style="width: 500px;">
                    <label class="form-label" for="">Email</label>
                    <input class="form-control" type="email" name="email" value="<?php echo $data['email'] ?>"
                        autocomplete="off">
                </div>

                <div class="mb-3" style="width: 500px;">
                    <label class="form-label" for="">No Telepon</label>
                    <input class="form-control" type="text" name="no_telp" value="<?php echo $data['no_telp'] ?>"
                        autocomplete="off">
                </div>

                <button type="submit" class="btn btn-success">Simpan Data</button>

            </form>
            <?php } ?>
        </div>
    </div>
</body>

</html>