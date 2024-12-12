<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];

    $sql = "SELECT * FROM students2 WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
 
        $row = $result->fetch_assoc();
       
 
        setcookie('student_id', $row['id'], time() + (86400 * 30), "/");  // Cookie for 30 days

 
        header("Location: dashboard.php");
        exit();
    } else {
        echo "No user found with that email.";
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Login</title>
</head>
<body>
    <h2>Login</h2>
    <form method="POST" action="login.php">
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <input type="submit" value="Login">
    </form>
</body>
</html>

