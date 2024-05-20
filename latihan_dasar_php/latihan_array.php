<?php
echo "<h2><u>Daftar Alat Tulis</u></h2><p>"; 
$barang = ["Buku Tulis", "Penghapus", "Spidol"];
echo $barang[0] . "<br>";
echo $barang[1] . "<br>";
echo $barang[2] . "<br>";
echo "<hr>";

$mahasiswa = [
    ["Ari", 123123, "Komputer"],
    ["Bayu", 123321, "Mesin"],
    ["Citta", 321123, "Akuntansi"]
];
echo "<h2><u>Daftar Mahasiswa</u></h2><p>";
foreach ($mahasiswa as $mhs) {
    echo "Nama Mahasiswa = " . $mhs[0] . "<br>";
    echo "NIM = " . $mhs[1] . "<br>";
    echo "Prodi = " . $mhs[2] . "<br><p>";
}
echo "<hr>";

$menu = [
    "menu1" => ["nama" => "Nasi Pecel", "harga" => 6000],
    "menu2" => ["nama" => "Nasi Kuning", "harga" => 8000],
    "menu3" => ["nama" => "Nasi Campur", "harga" => 10000]
];
echo "<h3>Daftar Menu dan Harga</h3>";
foreach ($menu as $key => $value) {
    echo $value['nama'] . ": Rp. " . $value['harga'] . "<br>";
}
echo "<p><hr>";

$Smenu = [
    ["nama" => "Nasi Pecel", "harga" => 6000],
    ["nama" => "Nasi Kuning", "harga" => 8000],
    ["nama" => "Nasi Campur", "harga" => 10000]
];
echo "<h3><font color='blue'>Daftar Menu dan Harga</font></h3>";
foreach ($Smenu as $menu) {
    echo $menu['nama'] . " Rp. " . $menu['harga'] . "<br>";
}
echo "<p><hr>";

echo "<h2><u>Contoh Array dalam Array</u></h2>";
$Smahasiswa = array(
    array("nama" => "Adi", "NIM" => "123", "prodi" => "Teknologi Informasi"),
    array("nama" => "Beni", "NIM" => "456", "prodi" => "Akuntansi"),
    array("nama" => "Citra", "NIM" => "789", "prodi" => "Teknik Sipil")
);
foreach ($Smahasiswa as $mhs) {
    echo $mhs['nama'] . "<br>";
    echo $mhs['NIM'] . "<br>";
    echo $mhs['prodi'] . "<p>";
}
?>
