<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'connect.php'; // Include your database connection

    $name = trim($_POST['name']);  // Corrected field name
    $phonenumber = trim($_POST['phone']);  // Corrected field name
    $sector = trim($_POST['sector']);
    $email = trim($_POST['email']);  // Corrected field name
    $topic = trim($_POST['subject']);  // Corrected field name
    $message = trim($_POST['message']);  // Corrected field name

    $stmt = $conn->prepare("INSERT INTO messages (name, phonenumber, department, email, subject, message) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $name, $phonenumber, $sector, $email, $topic, $message);  // Updated the type definition string
    $result = $stmt->execute();

    if ($result) {
        echo "New request has been inserted.";
    } else {
        echo "Failed to insert the request due to an error.";
    }
    $stmt->close();
    mysqli_close($conn);
} else {
    echo "Please enter data in all fields.";
}
?>
