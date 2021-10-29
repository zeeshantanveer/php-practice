<?php
?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["Student.php"]);?>">
    Name:<input type="text" name="name">
    <br><br>
    Email:<input type="text" name="email">
    <br><br>
    Website:<input type="text" name="website">
    <br><br>
    Comment:<textarea name="commment" rows="5" cols="40"></textarea>
    <br><br>
    Gender:
    <input type="radio" name="gender" value="female">Female
    <input type="radio" name="gender" value="male">Male
    <br><br>
    <input type="submit" name="submit" value="Submit">

</form>
