<?php
// 1. Database connection
$conn = new mysqli("localhost", "root", "", "studentdb");

// 2. Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// 3. Get form data safely
$rollno     = $_POST['rollno'] ?? '';
$firstname  = $_POST['firstname'] ?? '';
$lastname   = $_POST['lastname'] ?? '';
$fathername = $_POST['fathersname'] ?? '';

$day   = $_POST['day'] ?? '';
$month = $_POST['month'] ?? '';
$year  = $_POST['year'] ?? '';
$dob   = $year . "-" . $month . "-" . $day;

$email    = $_POST['email'] ?? '';
$password = password_hash($_POST['password'] ?? '', PASSWORD_DEFAULT);
$gender   = $_POST['gender'] ?? '';
$course   = $_POST['course'] ?? '';
$address  = $_POST['address'] ?? '';

// 4. Department (checkbox array)
$department = '';
if (!empty($_POST['dept'])) {
    $department = implode(", ", $_POST['dept']);
}

// 5. Insert data using prepared statement (SAFE)
$sql = "INSERT INTO registration
(rollno, firstname, lastname, fathername, dob, email, password, gender, department, course, address)
VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param(
    "sssssssssss",
    $rollno,
    $firstname,
    $lastname,
    $fathername,
    $dob,
    $email,
    $password,
    $gender,
    $department,
    $course,
    $address
);

// 6. Execute & response
if ($stmt->execute()) {
    echo "<h2 style='color:green; text-align:center;'>Registration Successful ✅</h2>";
} else {
    echo "Error: " . $stmt->error;
}

// 7. Close connection
$stmt->close();
$conn->close();
?>
