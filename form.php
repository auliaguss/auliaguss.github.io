<?php

    $nama =  $_POST['nama'];
    $email =  $_POST['email'];
    $pesan =  $_POST['pesan'];
    $sub = $_POST['subject'];

    $to = "auliaagustt@gmail.com";
    $body = "From : $email \n
            Name : $nama \n
            About : $pesan";

    $mail($to, $sub, $body);
    
    echo "Thank you. I will contact you soon, " . $nama . "!";

// $conn = new mysqli("localhost", "id16601901_contactdb", "zU<FoXp%[aX03!/H", "id16601901_contact");
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

// if ((isset($_POST['nama']) && $_POST['nama'] != '') && (isset($_POST['email']) && $_POST['email'] != '')) {
//     // require_once("contact_mail.php");
//     $nama = $conn->real_escape_string($_POST['nama']);
//     $email = $conn->real_escape_string($_POST['email']);
//     $pesan = $conn->real_escape_string($_POST['pesan']);
//     $sql = "INSERT INTO portofolio (nama, email, pesan) VALUES ('" . $nama . "','" . $email . "', '" . $pesan . "')";
//     if (!$result = $conn->query($sql)) {
//         die('There was an error running the query [' . $conn->error . ']');
//     } else {
//         echo "Thank you. I will contact you soon, " . $nama . "!";
//     }
// } else {
//     echo "Please fill Name and Email";
// }
