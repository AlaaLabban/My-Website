<!DOCTYPE html>
<?php
include("../includes/header.php");
include("../includes/links.php");
include("../db.php");

// Sanitize inputs
$email = trim($_POST['email']);
$fname = trim($_POST['fname']);
$lname = trim($_POST['lname']);
$phone = trim($_POST['phone']);
$university = trim($_POST['university']);
$address = trim($_POST['address']);
$id_number = trim($_POST['id_number']);
$city = $_POST['city'];
$gender = $_POST['gender'] ?? '';
$hobbies = isset($_POST['hobbies']) ? implode(", ", $_POST['hobbies']) : '';
$feedback = trim($_POST['feedback']);

// Check if email already exists
$sql_check = "SELECT * FROM feedback WHERE email = ?";
$stmt = $conn->prepare($sql_check);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

echo "<div class='content'>";
if ($result->num_rows > 0) {
    echo "<h2>Feedback Not Saved</h2><p>The email <strong>$email</strong> is already registered.</p>";
} else {
    $sql_insert = "INSERT INTO feedback (fname, lname, email, phone, university, address, id_number, city, gender, hobbies, feedback)
                   VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql_insert);
    $stmt->bind_param("sssssssssss", $fname, $lname, $email, $phone, $university, $address, $id_number, $city, $gender, $hobbies, $feedback);
    
    if ($stmt->execute()) {
        echo "<h2>Feedback Submitted Successfully</h2><p>Thank you, $fname! Your feedback has been saved.</p>";
    } else {
        echo "<h2>Error</h2><p>Something went wrong while saving your feedback.</p>";
    }
}
echo "</div>";

include("../includes/footer.php");
?>
