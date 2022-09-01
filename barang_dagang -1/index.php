<?php
include('config.php');

$result = mysqli_query($mysqli,"SELECT * FROM barang_dagang ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
     <title>Toko Barang Serba Ada</title>
</head>
<body>
   <!-- Navbar -->
   <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php">Toko Barang</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="add.php">Add</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Navbar -->

    <!-- Table -->

    <table class="table table-striped table-dark">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">nama_barang</th>
                <th scope="col">Stock</th>
                <th scope="col">harga_barang</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($data = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>" . $data['id'] . "</td>";
                echo "<td>" . $data['nama_barang'] . "</td>";
                echo "<td>" . $data['stock'] . "</td>";
                echo "<td>" . $data['harga_barang'] . "</td>";
                echo "<td><a href='update.php?id=$data[id]'>Update</a> | <a href='delete.php?id=$data[id]'>Delete</a></td></tr>";
            }
            ?>

        </tbody>
    </table>
    <!-- Table -->
  
</body>
</html>