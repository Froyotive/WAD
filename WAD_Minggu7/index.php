<?php include 'layout/header.php' ; 

$data_barang = select("SELECT * FROM tabel_barang ORDER BY id_barang ASC");
?>
<div class="container mt-5">
    <h1>Toko Merchandise Koh Albert</h1>
    <table class="table table-bordered table-striped mt-3">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Barang</th>
                <th>Gambar</th>
                <th>Game</th>
                <th>Stock</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <body>
            <?php $no = 1; ?>
            <?php foreach ($data_barang as $tabel_barang) : ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $tabel_barang['nama']; ?></td>
                <td>
                    <img src="gambar_product/<?= $tabel_barang['gambar']; ?>" class="img-thumbnail"
                        alt="<?= $tabel_barang['nama']; ?>" width="200px">
                </td>
                <td><?= $tabel_barang['game']; ?></td>
                <td><?= $tabel_barang['stock']; ?></td>
                <td>Rp. <?= number_format($tabel_barang['harga'],2,',','.'); ?></td>
                <td>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#UbahData<?= $tabel_barang['id_barang'] ?>" data-bs-whatever="@mdo">
                        Ubah Data
                    </button>
                    <a href="hapusdata.php?id_barang=<?= $tabel_barang['id_barang']; ?>" class="btn btn-danger"
                        onclick="return confirm('Apakah Yakin Ingin Menghapus Data Merchandise ?')">Hapus</a>
                </td>
                <div class="modal fade" id="UbahData<?= $tabel_barang['id_barang'] ?>" tabindex="-1"
                    aria-labelledby="UbahData<?= $tabel_barang['id_barang'] ?>" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="UbahData">Mengubah Data Produk</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="" method="post">
                                    <input type="hidden" name="id_barang" value="<?= $tabel_barang['id_barang'] ?>">
                                    <div class="mb-3">
                                        <label for="nama" class="form-label">Nama Barang</label>
                                        <input type="text" class="form-control" id="nama" name="nama"
                                            value="<?= $tabel_barang['nama']; ?>">
                                    </div>
                                    <div class=" mb-3">
                                        <label for="gambar" class="form-label">Gambar Barang</label>
                                        <input type="text" class="form-control" id="gambar" name="gambar"
                                            value="<?= $tabel_barang['gambar']; ?>"
                                            placeholder="Masukkan Nama File Gambar...">
                                    </div>
                                    <div class="mb-3">
                                        <label for="game" class="form-label">Game</label>
                                        <input type="text" class="form-control" id="game" name="game"
                                            value="<?= $tabel_barang['game']; ?>" placeholder="Masukkan Nama Game...">
                                    </div>
                                    <div class="mb-3">
                                        <label for="stock" class="form-label">Stock</label>
                                        <input type="number" class="form-control" id="stock" name="stock"
                                            value="<?= $tabel_barang['stock']; ?>"
                                            placeholder="Masukkan Jumlah Stock Barang...">
                                    </div>
                                    <div class="mb-3">
                                        <label for="harga" class="form-label">Harga</label>
                                        <input type="number" class="form-control" id="harga" name="harga"
                                            value="<?= $tabel_barang['harga']; ?>"
                                            placeholder="Masukkan Harga Barang...">
                                    </div>
                                    <button type="submit" name="ubahdata" class="btn btn-success"
                                        style="float: right;">Update Data</button>
                                </form>
                                <?php 
                                if(isset($_POST['ubahdata'])){
                                    $id_barang = $_POST['id_barang'];
                                    $nama = $_POST['nama'];
                                    $gambar = $_POST['gambar'];
                                    $game = $_POST['game'];
                                    $stock = $_POST['stock'];
                                    $harga = $_POST['harga'];

                                    $hasil = update_data($id_barang, $nama, $gambar, $game, $stock, $harga);

                                    if ($hasil) {
                                        echo '<script>
                                        window.location.href = "index.php?success=1";
                                     </script>';
                                    }
                                }
                                ?>
                            </div>
                            <div class="modal-footer">
                            </div>
                        </div>
                    </div>
                </div>
            </tr>
            <?php endforeach; ?>
        </body>
    </table>
    <a href="tambahdata.php" class="btn btn-success" style="float: right;">Tambah Data</a>
</div>
<script>
const {
    search
} = window.location;
const success = (new URLSearchParams(search)).get('success');
if (success === '1') {
    const alertDiv = document.createElement('div');
    alertDiv.classList.add('alert', 'alert-success', 'mt-5');
    alertDiv.textContent = 'Data pada barang berhasil diupdate';

    // Insert the alert div before the title
    const title = document.querySelector('h1');
    title.parentNode.insertBefore(alertDiv, title);

    setTimeout(() => {
        alertDiv.style.display = 'none';
    }, 5000); // Menghilangkan notifikasi setelah 5 detik
}
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script>