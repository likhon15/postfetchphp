<?php
include 'connect.php';

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];

    $sql = "INSERT INTO data (fname, lname, email, username, address, phone) 
            VALUES ('$fname', '$lname', '$email', '$username', '$address', '$phone')";

    if (mysqli_query($con, $sql)) {
        echo 'Submission successful';
    } else {
        echo 'Submission failed: ' . mysqli_error($con);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data List</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #ccc;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }
    </style>
</head>
<body>
    <button onClick="redirectToTable()">Get Table</button>
    <script>
        function redirectToTable() {
            window.location.href = 'list.php'; // Redirect to list.php
        }
    </script>

</body>
</html>
