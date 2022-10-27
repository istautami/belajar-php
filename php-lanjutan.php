<?php

$nama = "Ayu";

/* misal buat $nama 10x seperti line 6-11, 
echo $nama;
echo "<br/>"
echo $nama;
echo "<br/>"
echo $nama;
echo "<br/>"
maka dapat menggunakan "PERULANGAN":
*/

/* perulangan "FOR"
$no = 10;
for ($i=0; $i < $no; $i++) {
    $n = $i + 1;
    echo $n." ".$nama."<br/>";
}
*/

/* perulangan "WHILE"
$no = 11;
$i = 0;
while ($i < $no) {
    $n = $i + 1;
    echo $n." ".$nama."<br/>";
    $i++;
}
*/

/* perulangan "DO-WHILE"
$no = 10;
$i = 0;
do{
    $n = $i + 1;
    echo $n." ".$nama."<br/>";
    $i++;
} while ($i < $no)
*/

/* perulangan "FOREACH"
$data = array('Apel', 'Jeruk', 'Pisang','Mangga','Anggur');

$i = 0;
while ($i < count($data)) {
    echo $data[$i]."<br>";
    $i++;
}
*/
// echo $data[5];

/*
$data = array('Apel', 'Jeruk', 'Pisang','Mangga','Anggur');
foreach($data as $value) {
    echo $value."<br>";
}
*/

//PERCABANGAN
/*
if ($nama == "Ayu") {
    echo $nama." adalah orang yang jujur";
} else if($nama == "Bagus") {
    echo $nama." adalah orang yang bertanggung jawab";
} else {
    echo $nama." tidak tahu sifatnya";
}
*/
/*
switch($nama) {
    case "Ayu":
        $pesan = $nama." adalah orang yang jujur";
    break;
    case "Bagus":
        $pesan = $nama." adalah orang yang bertanggung jawab";
    break;
    default:
        $pesan = $nama." tidak tahu sifatnya";
}

echo $pesan;
*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Input Nama dan Diulang</h1>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <label>Nama</label>
        <input type="text" name="nama">
        <label>Jumlah</label>
        <input type="text" name="no">
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
        if(!empty($_POST['submit'])) {

            switch($_POST['nama']) {
                case "Ayu":
                    $pesan = $_POST['nama']." adalah orang yang jujur";
                break;
                case "Bagus":
                    $pesan = $_POST['nama']." adalah orang yang bertanggung jawab";
                break;
                default:
                    $pesan = $_POST['nama']." tidak tahu sifatnya";
            
            }

            for ($i=0;$i<$_POST['no'];$i++) {
                echo $pesan."<br>";
            }

        } else {
            echo "Kamu belum input nama dan jumlah.";
        }
    ?>
</body>
</html>