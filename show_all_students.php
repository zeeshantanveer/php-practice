<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
<a class="btn btn-primary" href="Student.php">Add student</a>
<div class="container">
    <h2>Show all students</h2>
    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Address</th>
            <th>Reg Date</th>
            <th>Action</th>

        </tr>
        </thead>
        <tbody>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "phpform";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM student";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>
            <td>".$row["id"]."</td>
            <td>".$row["Name"]."</td>
            <td>".$row["email"]."</td>
            <td>".$row["address"]."</td>
            <td>".$row["reg_date"]."</td>
            <td><a href=''>Delete</a></td>
        </tr>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
        </tbody>
    </table>
</div>

</body>
</html>

<?php
