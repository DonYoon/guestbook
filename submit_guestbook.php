<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guestbook Submit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <h1 class="text-start mt-4">Guestbook - Submit Entry</h1>
    <form action="submit_guestbook.php" method="post" class="mt-4">
        <div class="form-group mb-2">
            <label for="name"><strong>Name:</strong></label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="message"><strong>Message:</strong></label>
            <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <br>
    <a href="view_guestbook.php" class="btn btn-secondary">View Guestbook Entries</a>
</div>
</body>
</html>

<?php
session_start();

$servername = "localhost";
$username = "dy";
$password = "Letmein123";
$dbname = "dyapp";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $message = $_POST["message"];

    $stmt = $conn->prepare("INSERT INTO guestbook (name, message) VALUES (?, ?)");
    $stmt->bind_param("ss", $name, $message);

    if ($stmt->execute()) {
        echo "<div class='alert alert-success' role='alert'>Entry submitted successfully!</div>";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
