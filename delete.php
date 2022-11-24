<?php 

if(isset($_GET['id'])){
    // Mengambil id dari get
    $id = $_GET['id'];

    // Membuat koneksi dengan MySQL
    $con = mysqli_connect("localhost","root","","fakultas");

    // Cek Koneksi
    if (mysqli_connect_errno()) {
        echo "KONEKSI GAGAL" . mysqli_connect_error();
        exit();
    }else{
        echo 'KONEKSI BERHASIL';
    }

    $sql = "DELETE FROM mahasiswa WHERE id='$id' ";

    if (mysqli_query($con, $sql)) {
        echo "DATA BERHASIL DIHAPUS";
    } else {
        echo "ERROR: " . $sql . "<br>" . mysqli_error($con);
    }
      
    mysqli_close($con);
}

?>