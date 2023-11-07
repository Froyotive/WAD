<?php
include 'config/app.php';

$id_barang = (int)$_GET['id_barang'];

if (hapus_data($id_barang)) {
    echo "<script>
        alert('Barang Merchandise Berhasil Dihapus');
        document.location.href = 'index.php';
    </script>";
} else {
    echo "<script>
        alert('Barang Merchandise Gagal Dihapus');
        document.location.href = 'index.php';
    </script>";
}
?>