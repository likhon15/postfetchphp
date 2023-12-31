<?php
include 'connect.php'; // Include the database connection script

// Fetch data from the 'data' table
$query = "SELECT * FROM data";
$result = mysqli_query($con, $query);

if (!$result) {
    die('Query failed: ' . mysqli_error($con));
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
    <h1>Data List</h1>
    
    <table>
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Username</th>
            <th>Address</th>
            <th>Phone</th>
        </tr>
        
        <?php
        // Loop through the retrieved data and display it in a table
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<tr>';
            echo '<td>' . $row['ID'] . '</td>';
            echo '<td>' . $row['fname'] . '</td>';
            echo '<td>' . $row['lname'] . '</td>';
            echo '<td>' . $row['email'] . '</td>';
            echo '<td>' . $row['username'] . '</td>';
            echo '<td>' . $row['address'] . '</td>';
            echo '<td>' . $row['phone'] . '</td>';
            echo '</tr>';
        }
        ?>
    </table>

    <br><br>
    <form action="" style="width: 300px; padding: 20px; border: 1px solid #ccc; border-radius: 5px; padding-right:40px; background-color:skyblue">
    <label for="" style="font-weight: bold;">ID</label><br>
    <input type="text" style="width: 100%; padding: 5px; margin-bottom: 10px;">
    <br>
    <label for="" style="font-weight: bold;">Username</label><br>
    <input type="text" style="width: 100%; padding: 5px; margin-bottom: 10px;">
    <input type="submit" value="update" style="background-color: #007bff; color: #fff; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;">
</form>

</body>
</html>
