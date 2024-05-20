<!DOCTYPE html>
<html>
<head>
    <title>Belajar Perulangan</title>
</head>
<body bgcolor="#a0eefa">

<?php
echo "<h4>Contoh Perulangan FOR</h4><p>";
for ($i = 0; $i < 5; $i++) {
    echo "Ini perulangan ke-" . ($i + 1) . "<br>";
}
echo "<hr>";

echo "<h4>Contoh Perulangan While</h4>";
$ulangi = 0;
while ($ulangi < 5) {
    echo "<p>Ini adalah perulangan ke-" . ($ulangi + 1) . "</p>";
    $ulangi++;
}
echo "<hr>";

echo "<h4>Contoh Perulangan Do-While</h4>";
$ulangi = 4;
do {
    echo "<p>ini adalah perulangan ke-" . ($ulangi + 1) . "</p>";
    $ulangi--;
} while ($ulangi > 0);
echo "<hr>";

$buah = array('Durian', 'Nangka', 'Jeruk', 'Apel');
echo "<h4>Contoh Perulangan Foreach</h4>";
foreach ($buah as $value) {
    echo $value . "<br>";
}
echo "<p>";
foreach ($buah as $key => $value) {
    echo "Index ke-" . $key . " adalah " . $value . "<br>";
}
echo "<hr>";

$menu = array(
    ["Nasi pecel", 6000],
    ["Nasi campur", 10000],
    ["Nasi goreng", 12000]
);
$banyak_menu = count($menu);
echo "<h4>Daftar Menu dan Harga</h4>";
echo "<table border='1'>
<tr><th>No</th>
<th>Nama menu</th>
<th>Harga</th></tr>";
$no = 1;
foreach ($menu as $item) {
    echo "<tr><td>" . $no . "</td>";
    echo "<td>" . $item[0] . "</td>";
    echo "<td>" . $item[1] . "</td></tr>";
    $no++;
}
echo "</table>";
?>

</body>
</html>
