// Connect to database
$host = "localhost";
$user = "username";
$password = "password";
$dbname = "database";
$conn = mysqli_connect($host, $user, $password, $dbname);

// Display user profile
function displayUserProfile($userId) {
    global $conn;
    $sql = "SELECT * FROM users WHERE id='$userId'";
    $result = mysqli_query($conn, $sql);
    $user = mysqli_fetch_assoc($result);
    echo "Username: " . $user['username'] . "<br>";
    echo "Phone: " . $user['phone'];
}
