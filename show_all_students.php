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

if (isset($_REQUEST['delete_student']) && !empty($_REQUEST['delete_student'])){
    $deleteStudentSql = "DELETE FROM student WHERE id=".$_REQUEST['delete_student'];
    echo "<br>";
    if ($conn->query($deleteStudentSql) === TRUE) {
        echo "Record deleted successfully";
        header("location:".$_SERVER['PHP_SELF']);
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}
if (isset($_REQUEST['edit_student']) && !empty($_REQUEST['edit_student'])){
    $editStudentSql = "SELECT * FROM student WHERE id=".$_REQUEST['edit_student'];
    $resultStudent = $conn->query($editStudentSql);
    $studentArr = [];

    if ($resultStudent->num_rows > 0) {
        // output data of each row
        while($row = $resultStudent->fetch_assoc()) {
            if (!empty($row["id"])){
                $studentArr['id'] = $row["id"];
                $studentArr['Name'] = $row["Name"];
                $studentArr['email'] = $row["email"];
                $studentArr['password'] = $row["password"];
                $studentArr['address'] = $row["address"];
                $studentArr['reg_date'] = $row["reg_date"];
            }
        }
    }
    if (!empty($studentArr)){
        header("Location: ./edit_student_form.php?".http_build_query($studentArr));
    }

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
            <td><a href='".$_SERVER['PHP_SELF']."?edit_student=".$row["id"]."'>Edit</a> | <a href='".$_SERVER['PHP_SELF']."?delete_student=".$row["id"]."'>Delete</a></td>
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
