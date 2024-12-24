<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = htmlspecialchars($_POST["name"]);
    $usn = htmlspecialchars($_POST["usn"]);
    $dob = htmlspecialchars($_POST["dob"]);
    $phone = htmlspecialchars($_POST["phone"]);
    $college = htmlspecialchars($_POST["college"]);

    // Display the submitted data
    echo "<h1>Submitted Information</h1>";
    echo "<p><strong>Name:</strong> $name</p>";
    echo "<p><strong>University Seat Number:</strong> $usn</p>";
    echo "<p><strong>Date of Birth:</strong> $dob</p>";
    echo "<p><strong>Phone Number:</strong> $phone</p>";
    echo "<p><strong>College:</strong> $college</p>";
}
?>
