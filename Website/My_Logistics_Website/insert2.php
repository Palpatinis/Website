<?php  
if (isset($_POST['username']) && isset($_POST['name']) &&  isset($_POST['email'])) {
    include 'connect.php';  // Assuming connect.php contains code to connect to the database

    // trim removes extra whitespace characters from both sides of the string
    $username = trim($_POST['username']);
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
  
    if (empty($username) || empty($name) || empty($email)) {
        echo "Παρακαλώ συμπληρώστε όλα τα πεδία!";
    } else {
        $stmt = $conn->prepare("INSERT INTO clients (username, name, email) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $username, $name, $email);
        $result = $stmt->execute();

        if ($result) {
            echo "Καινούριο Αίτημα έχει εισάχθει στην λίστα αιτήματων";
        } else {
            echo "Δεν μπορέσαμε να εισάγουμε το αίτημα σας στην λίστα λογω σφάλματος κατά την εισαγωγή των στοιχείων σας";
        }
        $stmt->close();
    }

    mysqli_close($conn);
} else {
    echo "Παρακαλώ εισάγετε δεδομένα σε όλα τα πεδία!";
}

echo "<br><a href='index1.html'>Back</a>";
?>