<?php 


// Menampilkan Data
function select($query)
{
  global $db;

  $result = mysqli_query($db, $query);
  $rows = [];

  while ($row = mysqli_fetch_assoc($result)){
    $rows[] = $row;
  }

  return $rows;

}

// Menambah Data
function create_barang($post)
{
  global $db;

  $nama   = $post['nama'];
  $gambar = $post['gambar'];
  $game   = $post['game'];
  $stock  = $post['stock'];
  $harga  = $post['harga'];

  // Query Tambah Data
  $query = "INSERT INTO tabel_barang VALUES(null, '$nama','$gambar', '$game', '$stock', '$harga')";

  mysqli_query($db, $query);

  return mysqli_affected_rows($db);
}

// Mengubah Data
function update_data($id_barang, $nama, $gambar, $game, $stock, $harga)
{
    global $db;

    $nama = mysqli_real_escape_string($db, $nama);
    $gambar = mysqli_real_escape_string($db, $gambar);
    $game = mysqli_real_escape_string($db, $game);
    $stock = (int)$stock;
    $harga = (int) $harga;

    // Query Ubah Data
    $query = "UPDATE tabel_barang SET 
              nama = '$nama', 
              gambar = '$gambar', 
              game = '$game', 
              stock = '$stock', 
              harga = '$harga' 
              WHERE id_barang = $id_barang";
              
  mysqli_query($db, $query);

  return mysqli_affected_rows($db);
  
}

function hapus_data($id_barang){
  global $db;

  $query = "DELETE FROM tabel_barang WHERE id_barang = $id_barang";

  mysqli_query($db, $query);

  return mysqli_affected_rows($db);
}
?>