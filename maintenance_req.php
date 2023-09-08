<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maintenance Request</title>
    <link rel="stylesheet" href="maintenance_req.css">
</head>
<body>

    <div class="container">
        <h1>Maintenance Request Form</h1>
        <form action="includes/maintenance_reqback.inc.php" method="POST">
            <label for="user_name">Your Name:</label>
            <input type="text" id="user_name" name="user_name" required><br>
            <label for="user_email">Your Email:</label>
            <input type="email" id="user_email" name="user_email" required><br>
            <label for="request_type">Request Type:</label>
            <input type="text" id="request_type" name="request_type" required><br>
            <label for="request_details">Request Details:</label><br>
            <textarea id="request_details" name="request_details" rows="4" cols="50" required></textarea><br>
            <button type="submit">Submit Request</button>
        </form>
    </div>
</body>
</html>
