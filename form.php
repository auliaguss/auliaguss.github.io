<?php
$conn = new mysqli("localhost", "root", "", "axioo");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ((isset($_POST['nama']) && $_POST['nama'] != '') && (isset($_POST['email']) && $_POST['email'] != '')) {
    // require_once("contact_mail.php");
    $nama = $conn->real_escape_string($_POST['nama']);
    $email = $conn->real_escape_string($_POST['email']);
    $pesan = $conn->real_escape_string($_POST['pesan']);
    $sql = "INSERT INTO portofolio (nama, email, pesan) VALUES ('" . $nama . "','" . $email . "', '" . $pesan . "')";
    if (!$result = $conn->query($sql)) {
        die('There was an error running the query [' . $conn->error . ']');
    } else {
        echo "Thank you. I will contact you soon, " . $nama . "!";
    }
} else {
    echo "Please fill Name and Email";
}
