<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/bootstrap_4/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>

</body>
</html>

<?php


class Student
{
    public $id, $name, $email, $password, $address;
    
    public function __construct(){
        $this->id = '';
        $this->name = '';
        $this->email = '';
        $this->password = '';
        $this->address = '';
    }

    public function addStudent($name, $email, $password, $address){
        $this->id = 1;
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->address = $address;
    }

    public function saveStudent(){
        $sql = "";

    }

    public function showStudent(){
        $studentId = rand(10,15);
        echo '<br><----------- Student - '.$studentId.' ------------ ><br>';
        echo "<b>ID :</b> ".$studentId."<br>";
        echo "<b>Name :</b> ".$this->name."<br>";
        echo "<b>Email :</b> ".$this->email."<br>";
        echo "<b>Password :</b> ".$this->password."<br>";
        echo "<b>Address :</b> ".$this->address."<br>";
    }
}


$name = $email =  $password = $roll_no = $city_name =  $mobile_no = $explain_your_self = $gender = '';
$nameErr = $emailErr =  $passwordErr = $roll_noErr = $city_nameErr =  $mobile_noErr = $explain_your_selfErr = $genderErr = '';

if (!empty($_POST['name'])){
    $name = $_POST['name'];
}else{
    $_SESSION['nameErr'] = 'Name is required';
}
if (!empty($_POST['email'])){
    $email = $_POST['email'];
}else{
    $emailErr = 'Email is required';
}
if (!empty($_POST['password'])){
    $password = $_POST['password'];
}else{
    $passwordErr = 'Password is required';
}
if (!empty($_POST['roll_no'])){
    $roll_no = $_POST['roll_no'];
}else{
    $roll_noErr = 'Roll no is required';
}
if (!empty($_POST['city_name'])){
    $city_name = $_POST['city_name'];
}else{
    $city_nameErr = 'City is required';
}
if (!empty($_POST['mobile_no'])){
    $mobile_no = $_POST['mobile_no'];
}else{
    $mobile_noErr = 'Mobile no is required';
}
if (!empty($_POST['explain_your_self'])){
    $explain_your_self = $_POST['explain_your_self'];
}else{
    $explain_your_selfErr = 'Explain yourself is required';
}
if (!empty($_POST['gender'])){
    $gender = $_POST['gender'];
}else{
    $genderErr = 'Gender is required';
}

if (empty($name) || empty($email) || empty($password) || empty($city_name)){
    header("location:student_form_practice.php");
}
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "phpform";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$studentsql = "INSERT INTO student (`name`, `email`, `password`, `address`) VALUES ('$name','$email','$password','$city_name')";
// sql to create table
$sql = "CREATE TABLE IF NOT EXISTS student (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(30),
email VARCHAR(50),
password VARCHAR(50),
address VARCHAR(50) NOT NULL,
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if (mysqli_query($conn, $sql)) {
    echo "<br>Table Student created successfully";
} else {
    echo "<br>Error creating table: " . mysqli_error($conn);
}
if (mysqli_query($conn,$studentsql )) {
    echo "<br>Table Student added successfully";
} else {
    echo "<br>Error creating table: " . mysqli_error($conn);
}
echo "<br>";
if ($conn->query($studentsql) === TRUE) {
    $last_id = $conn->insert_id;
    echo "New record created successfully. Last inserted ID is: " . $last_id;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$sql = "DELETE FROM student WHERE id=5";
echo "<br>";
if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}
$sql = "UPDATE student SET name='Mohsin' WHERE id=6";
echo "<br>";
if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}
$sql = "INSERT INTO student (name,email, address)
VALUES ('john', 'john@example.com', 'mrd');";
$sql .= "INSERT INTO student (name, email, address)
VALUES ('Mary', 'mary@example.com', 'lhr');";
$sql .= "INSERT INTO student (name, email, address)
VALUES ('Julie', 'julie@example.com', 'fslabd')";
echo "<br>";
if ($conn->multi_query($sql) === TRUE) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql = "SELECT id, name, name FROM student WHERE id='10'";
$result = $conn->query($sql);

if (isset($result->num_rows) && $result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["name"]. "email:  " . $row["email"]. "<br>";
    }
} else {
    echo "0 results";
}

$sql = "SELECT id FROM student WHERE name='Alia'";
$result = $conn->query($sql);

if ($conn->multi_query($sql) === TRUE){
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
} else {
    echo "0 results";
}


mysqli_close($conn);

$student = new Student();
$student->addStudent($name, $email, $password, $city_name);
$student->showStudent();
?>
<div id="btn">
    <a class="btn btn-primary" href="student_form_practice.php">Back</a>

</div>
