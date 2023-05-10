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

            <header class="d-flex align-items-center justify-content-between mx-4 mb-4">
                <p class="h3">Detail Data</p>
                <a href="./index.php" class="btn btn-primary">Lihat Semua Data</a>
            </header>

            <table class="table-bordered w-100">
                <tr>
                    <th class="border px-5 py-3 text-right">
                        Username
                    </th>
                    <td class=" border px-5 py-3 text-left">
                        <?php echo $data['username'] ?>
                    </td>
                </tr>

                <tr>
                    <th class="border px-5 py-3 text-right">
                        Name
                    </th>
                    <td class="border px-5 py-3 text-left">
                        <?php echo $data['name'] ?>
                    </td>
                </tr>

                <tr>
                    <th class="border px-5 py-3 text-right">
                        Gender
                    </th>
                    <td class=" border px-5 py-3 text-left">
                        <?php echo $data['jk'] ?>
                    </td>
                </tr>

                <tr>
                    <th class="border px-5 py-3 text-right">
                        Born
                    </th>
                    <td class=" border px-5 py-3 text-left">
                        <?php echo $data['ttl'] ?>
                    </td>
                </tr>

                <tr>
                    <th class="border px-5 py-3 text-right">
                        Address
                    </th>
                    <td class=" border px-5 py-3 text-left">
                        <?php echo $data['address'] ?>
                    </td>
                </tr>

                <tr>
                    <th class="border px-5 py-3 text-right">
                        Email
                    </th>
                    <td class=" border px-5 py-3 text-left">
                        <?php echo $data['email'] ?>
                    </td>
                </tr>

                <tr>
                    <th class="border px-5 py-3 text-right">
                        No Telepon
                    </th>
                    <td class=" border px-5 py-3 text-left">
                        <?php echo $data['no_telp'] ?>
                    </td>
                </tr>
            </table>

            <?php } ?>
        </div>
    </div>
</body>

</html>