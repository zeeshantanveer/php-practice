<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        #h2{
            background-color: blue;
        }
    </style>
</head>
<body>
<?php
$name = $email= $gender= $comment= $website="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
    }
    if (empty($_POST["email"])) {
        $email = "email is required";
    } else {
        $email = test_input($_POST["POST"]);
    }
    if (empty($_POST["cpmment"])) {
        $comment = "comment is required";
    } else {
        $comment = test_input($_POST["commnet"]);
    }
    if (empty($_POST["gender"])) {
        $gender = "gender is required";

    } else {
        $gender = test_input($_POST["gender"]);
    }
}
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
<h2>form validation</h2>
<p><span class="error">*required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Name:<input type="text" name="name">
    <span class="error">* <?php echo $name?></span>
    <br><br>
    Email:<input type="text" name="email">
    <span class="error">*<?php echo $email?></span>
    <br><br>
    Website:<input type="text" name="website">
    <span class="error"><?php echo $website?></span>
    <br><br>
    Comment:<textarea name="commment" rows="5" cols="40"></textarea>
    <br><br>
    Gender:
    <input type="radio" name="gender" value="female">Female
    <input type="radio" name="gender" value="male">Male
    <input type="radio" name="gender" value="other">Other
    <span class="error">* <?php echo $gender;?></span>
    <br><br>
    <input type="submit" name="submit" value="Submit">


</form>

</body>
</html>
