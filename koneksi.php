<?php
// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "grojogan";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $emailp = $_POST['emailp'];
    $nomorp = $_POST['nomorp'];
    $jmltiket = $_POST['jmltiket'];
    $kunjungan = $_POST['kunjungan'];

    $sql = "INSERT INTO tikett (nama, emailp, nomorp, jmltiket, kunjungan)
    VALUES ('$nama', '$emailp', '$nomorp', '$jmltiket', '$kunjungan')";

    if ($conn->query($sql) === TRUE) {
        echo "Tiket berhasil dibeli!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
