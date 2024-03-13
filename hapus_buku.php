<?php
// ob_start();
require "config.php";
// $id = $_GET["user_id"];
$get = $_GET["id"];
// var_dump($get);
$query = "DELETE FROM buku WHERE id=$get";
$datahapus = mysqli_query($connect, $query);
if ($datahapus){
  // ob_clean();
  header("location:buku.php");
  // $id = $_GET["user_id"];
} else {
  echo "Maaf Buku yang Anda Hapus Memiliki Status sedang Dipinjam !";
}
?>