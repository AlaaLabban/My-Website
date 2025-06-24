<!DOCTYPE html>
<?php
include($_SERVER['DOCUMENT_ROOT'] . "/includes/header.php");
include($_SERVER['DOCUMENT_ROOT'] . "/includes/links.php");
include($_SERVER['DOCUMENT_ROOT'] . "/db.php");

echo "<div class='content'><h2>Student & Department Info (Expanded)</h2>";

$sql = "SELECT students.name AS student_name, students.email, students.gpa, students.year, 
               students.phone, students.city, departments.name AS department_name 
        FROM students 
        INNER JOIN departments ON students.department_id = departments.id";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table class='schedule-table'>";
    echo "<tr><th>Name</th><th>Email</th><th>GPA</th><th>Year</th><th>Phone</th><th>City</th><th>Department</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['student_name']}</td>
                <td>{$row['email']}</td>
                <td>{$row['gpa']}</td>
                <td>{$row['year']}</td>
                <td>{$row['phone']}</td>
                <td>{$row['city']}</td>
                <td>{$row['department_name']}</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "<p>No records found.</p>";
}

echo "</div>";
include($_SERVER['DOCUMENT_ROOT'] . "/includes/footer.php");
?>
