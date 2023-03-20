// Connect to database
$host = "localhost";
$user = "username";
$password = "password";
$dbname = "database";
$conn = mysqli_connect($host, $user, $password, $dbname);

// Register new user
function registerUser($email, $password, $username, $phone) {
    global $conn;
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    $sql = "INSERT INTO users (email, password, username, phone) VALUES ('$email', '$hashedPassword', '$username', '$phone')";
    if (mysqli_query($conn, $sql)) {
        echo "User registered successfully";
    } else {
        echo "Error registering user: " . mysqli_error($conn);
    }
}
