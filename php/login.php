// Connect to database
$host = "localhost";
$user = "username";
$password = "password";
$dbname = "database";
$conn = mysqli_connect($host, $user, $password, $dbname);

// Log in user
function loginUser($email, $password) {
    global $conn;
    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn, $sql);
    $user = mysqli_fetch_assoc($result);
    if (password_verify($password, $user['password'])) {
        echo "User logged in successfully";
        // Display user profile
        displayUserProfile($user['id']);
    } else {
        echo "Error logging in user";
    }
}


