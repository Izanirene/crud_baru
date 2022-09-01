<?php
include('config.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
      <title>Document</title>
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

    <!-- Form Add -->
    <h1>ADD ITEM</h1>
    <form action="add.php" method="post" name="formAdd">
        <table>
            <tr>
                <td><label for="merk">Merk</label></td>
                <td><input type="text" id="merk" name="merk" placeholder="Merk" required></td>
            </tr>
            <tr>
                <td><label for="variety">Variety :</label></td>
                <td>

                    <select name="variety" id="variety" required>
                        <option value="indomie Goreng">indomie Goreng</option>
                        <option value="odol">odol</option>
                        <option value="minyak goreng">minyak goreng</option>
                        <option value="buku tulis">buku tulis</option>
                        <option value="pensil">pensil</option>
                        <option value=""></option>

                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="stock">Stock</label></td>
                <td><input type="number" min="0" id="stock" name="stock" placeholder="Stock" required></td>
            </tr>
            <tr>
                <td><label for="price">Price</label></td>
                <td><input type="number" min="0" id="price" name="price" placeholder="Price" required></td>
            </tr>
            <tr>
                <td><button type="submit" name="submit" class="btn btn-primary">Add Item</button></td>
            </tr>
            </div>
        </table>
    </form>

    <!-- Form Add -->

</body>
<?php
if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $nama_barang = $_POST['nama_barang'];
    $stock = $_POST['stock'];
    $harga_barang = $_POST['harga_barang'];

    $result = mysqli_query($mysqli, "INSERT INTO barang_dangang(id,nama_barang,stock,harga_barang) VALUES('$id','$nama_barang',$stock,$harga_barang)");

    if ($result) {
        header("Location: index.php");
    } else {
        echo "Data gagal ditambahkan.";
    }
}

?>

</html>