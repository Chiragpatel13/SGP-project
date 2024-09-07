<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "microproject";

// Create a new database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to update password
function updatePassword($username, $newPassword) {
    global $conn;

    // Prepare and execute the update statement
    $stmt = $conn->prepare("UPDATE login SET password = ? WHERE username = ?");
    $stmt->bind_param("ss", $newPassword, $username);
    $stmt->execute();
    $stmt->close();
}

// Check if the form is submitted
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $newPassword = $_POST['new_password'];

    // Verify the username
    $stmt = $conn->prepare("SELECT * FROM login WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        // Username is correct, update the password
        updatePassword($username, $newPassword);
        $message = "Password updated successfully.";
    } else {
        $error = "Invalid username.";
    }

    $stmt->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Password Change</title>
    <style>
     .button {
  display: inline-block;
  padding: 10px 20px;
  background-color: #4CAF50;
  color: #fff;
  text-decoration: none;
  border-radius: 4px;
  border: none;
  cursor: pointer;
  font-size: 16px;
}

.button:hover {
  background-color: #45a049;
}

.button:active {
  background-color: #3e8e41;
}

.button:focus {
  outline: none;
}</style>
</head>
<body>
    <h2>Password Change</h2>

    <?php if (isset($message)) { ?>
        <p style="color: green;"><?php echo $message; ?></p>
    <?php } ?>

    <?php if (isset($error)) { ?>
        <p style="color: red;"><?php echo $error; ?></p>
    <?php } ?>

    <form method="POST" action="">
        <label for="username">Username:</label>
        <input type="text" name="username" required><br><br>

        <label for="new_password">New Password:</label>
        <input type="password" name="new_password" required><br><br>

        <input type="submit" name="submit" class="button" value="Change Password">
        <br><br>

        <a href="index.php" class="button">Go to Home Page</a>
    </form>
</body>
</html>
