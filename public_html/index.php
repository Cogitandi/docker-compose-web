<h1>Lacznosc z baza</h1>
<?php
$host = 'mysql';
$user = 'user';
$pass = 'secret';
$conn = new mysqli($host, $user, $pass);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
  echo "Connected to MySQL successfully!";
}
?>
