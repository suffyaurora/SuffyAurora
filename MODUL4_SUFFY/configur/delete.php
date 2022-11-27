<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include ('connection.php');

$id_mobil = $_GET['id_mobil'];
$query = mysqli_query($connect,"SELECT * FROM showroom_suffy_table where id_mobil ='$id_mobil'");
$show = mysqli_fetch_assoc($query);
$foto = $show['foto_mobil'];
    if(file_exists("../foto/$foto")) {
        unlink("../foto/$foto");
        if(isset($_GET['id_mobil'])) {
            mysqli_query($connect, "DELETE FROM showroom_suffy_table WHERE id_mobil = '$_GET[id_mobil]'");
        }
    }
// maka data akan terhapus
    echo "Data telah terhapus";
    echo "<meta http-equiv=refresh content=2;URL='../pages/Myfile.php'>";
?>