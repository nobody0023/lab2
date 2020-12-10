<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<?php
// Start the session
session_start();
?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "testdb"; //повинна бути створена в субд
$_SESSION['auth'] = false;

// Встановлення з'єднання
$conn = new mysqli($servername, $username, $password, $database);

/*// Перевірка з'єднання
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";*/

$login = $_POST['login'];
$password = $_POST['password'];

$user = mysqli_query($conn, "SELECT * FROM users WHERE login='" . $login . "' and password='" . $password . "';");
$check_user = mysqli_fetch_array($user);

if (is_array($check_user)) {
    $_SESSION['auth'] = true;
} else {
    header('Location: restrictedSQL.php');
}

mysqli_close($conn);
?>



