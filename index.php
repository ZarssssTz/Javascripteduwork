<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Customer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
</head>
<body>
<div class="container">
        <div class="m-5 shadow-lg p-3 mb-5 bg-body-tertiary rounded">
            <h1 class="text-center">Data Customer</h1>
            <a href="tambah.php" class="btn btn-primary btn-lg mb-2">Tambah Data</a>
            <table class="table" id="myTable">
                <thead>
                    <tr class="text-center">
                        <th class="text-center" scope="col">No. </th>
                        <th class="text-center" scope="col">First Name</th>
                        <th class="text-center" scope="col">Last Name</th>
                        <th class="text-center" scope="col">Email</th>
                        <th class="text-center" scope="col">HP</th>
                        <th class="text-center" scope="col">Alamat</th>
                        <th class="text-center" scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include 'koneksi.php'; $query = mysqli_query($conn, "SELECT * FROM `customer`");
                    $no = 1;
                    if (mysqli_num_rows($query) > 0) {
                        while ($data = mysqli_fetch_array($query)) {
                    ?>
                            <tr>
                                <th class="text-center align-middle"><?= $no ?></th>
                                <td class="text-center align-middle"><?= $data['first_name'] ?></td>
                                <td class="text-center align-middle"><?= $data['last_name'] ?></td>
                                <td class="text-center align-middle"><?= $data['email'] ?></td>
                                <td class="text-center align-middle"><?= $data['phone'] ?></td>
                                <td><?= $data['address'] ?></td>
                                <td width="200px" class="text-center align-middle">
                                    <a href="edit.php?id=<?= $data['id'] ?>" class="btn btn-warning btn-sm text-white"><i class="text-bold">Edit</i></a>
                                    <a href="hapus.php?id=<?= $data['id'] ?>" class="btn btn-danger btn-sm"><i class="text-bold">Delete</i></a>
                                </td>
                            </tr>
                        <?php $no++;
                        }; ?>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>

<script type="text/javascript">
    $(document).ready(function(){
        $('#mytable').DataTable();

    });
</script>



