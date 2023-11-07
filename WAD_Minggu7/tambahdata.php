<?php 
include 'layout/header.php' ; 

if (isset($_POST['tambah'])){
    if(create_barang($_POST) > 0) {
        $success_message = "Data Barang Berhasil Ditambahkan";
    } else {
        $error_message = "Data Barang Gagal Ditambahkan";
    }
}
?>
<div class="container mt-5 ">
    <h1>Tambah Data Barang Merchandise</h1>
    <hr>
    <!-- Tampilkan notifikasi jika ada -->
    <?php if (isset($success_message)): ?>
    <div class="alert alert-success" role="alert">
        <?php echo $success_message; ?>
    </div>
    <?php endif; ?>

    <?php if (isset($error_message)): ?>
    <div class="alert alert-danger" role="alert">
        <?php echo $error_message; ?>
    </div>
    <?php endif; ?>
    <form action="" method="post">
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Barang</label>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Barang...">
        </div>
        <div class="mb-3">
            <label for="gambar" class="form-label">Gambar Barang</label>
            <input type="text" class="form-control" id="gambar" name="gambar"
                placeholder="Masukkan Nama File Gambar...">
        </div>
        <div class="mb-3">
            <label for="game" class="form-label">Game</label>
            <input type="text" class="form-control" id="game" name="game" placeholder="Masukkan Nama Game...">
        </div>
        <div class="mb-3">
            <label for="stock" class="form-label">Stock</label>
            <input type="number" class="form-control" id="stock" name="stock"
                placeholder="Masukkan Jumlah Stock Barang...">
        </div>
        <div class="mb-3">
            <label for="harga" class="form-label">Harga</label>
            <input type="number" class="form-control" id="harga" name="harga" placeholder="Masukkan Harga Barang...">
        </div>
        <a href="index.php" class="btn btn-dark">Kembali</a>
        <button type="submit" name="tambah" class="btn btn-success" style="float: right;">Tambah Data</button>
    </form>
</div>
<?php 
include 'layout/footer.php'
?>