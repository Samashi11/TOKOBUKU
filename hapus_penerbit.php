<?php
require "config.php";
$get = $_GET["id"];
$query = "DELETE FROM penerbit WHERE id=$get";
$datahapus = mysqli_query($connect, $query);
if ($datahapus){
  header("location:penerbit.php");
} else {
  echo "Maaf Buku yang Anda Hapus Memiliki Status sedang Dipinjam !";
}
?>