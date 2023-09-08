<?php
$id = "";
$email = "";
$username = "";
$errorMessage = "";
$successMessage = "";

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "smartoffice";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (!isset($_GET["id"])) {
        header("Location: mainAdmin.php");
        exit;
    }
    $id = $_GET["id"];

    $sql = "SELECT * FROM users WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if (!$result) {
        die("Query failed: " . $stmt->error);
    }

    $row = $result->fetch_assoc();

    if (!$row) {
        header("Location: edit.php");
        exit; 
    }

    $email = $row["email"];
    $username = $row["username"];
} else {
    $id = $_POST["id"];
    $email = $_POST["email"];
    $username = $_POST["username"];

    if (empty($email) || empty($username)) {
        $errorMessage = "All the fields are required";
    } else {
        $updateSql = "UPDATE users SET email=?, username=? WHERE id=?";
        $updateStmt = $conn->prepare($updateSql);
        $updateStmt->bind_param("ssi", $email, $username, $id);

        if (!$updateStmt->execute()) {
            $errorMessage = "Invalid query: " . $conn->error;
        } else {
            $successMessage = "Client updated correctly";
            header("Location: edit.php");
            exit;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart office</title>
    <link rel="stylesheet" href="editbtn2.css">
</head>
<body>
    <div class="container my-5">
        <h2>Edit client</h2>
        <form method="post" action="">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Email</label>
                <div class="col-sm-6">
                    <input type="email" class="form-control" name="email" value="<?php echo $email; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Username</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="username" value="<?php echo $username; ?>">
                </div>
            </div>
            <div class="row buttons">
                <div class="offset-sm-3 col-sm-3 d-grid">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                <div class="col-sm-3 d-grid">
                    <a class="btn btn-outline-primary" href="edit.php" role="button">Cancel</a>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
