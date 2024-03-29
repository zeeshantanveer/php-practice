<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/bootstrap_4/css/bootstrap.min.css">
    <style>
        .jumbotron{
            border-radius: 10px;
            background-color: #3300aa;
            color: white;
        }
        .jumbotron:hover{
            background-image: linear-gradient(to right,lightcoral , yellow);

        }
    </style>


       <title>Edit Student Form</title>
       </head>
<body>
<div id="btn">
    <a class="btn btn-primary" href="show_all_students.php">Show all students</a>
</div>

<br><div class="container">

    <div class="jumbotron">
        <h1>Edit Student Form</h1>
    </div>
    <?php
        $student = $_REQUEST;
    ?>
    <form action="Student.php" method="post">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" name="name" placeholder="Name" class="form-control" value="<?php echo $student['Name']; ?>">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" name="email" placeholder="Email" class="form-control" value="<?php echo $student['email']; ?>">
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="Password" name="password" placeholder="Password" id="inputPassword"
                           class="form-control" value="<?php echo $student['Name']; ?>">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Roll No</label>
                    <input type="number" name="Roll No" placeholder="Roll No" class="form-control">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">City Name</label>
                    <input type="text" name="city_name" placeholder="City Name" class="form-control" value="<?php echo $student['address']; ?>">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Mobile No</label>
                    <input type="number" name="mobile_no" placeholder="Mobile  No" class="form-control">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="" class="form-label">Explain your self</label>
                    <textarea name="explain_your_self" cols="20" rows="5" class="form-control" placeholder="Explain your self"></textarea>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <strong>Gender:</strong><br>
                <label for="">male</label>
                <input type="radio" name="gender" value="male"><br>
                <label for="">female</label>
                <input type="radio" name="gender" value="female"><br>
                <label for="">other</label>
                <input type="radio" name="gender" value="Other">
            </div>

            <div class="col-md-6">
                <strong>Hobbies:</strong><br>
                <input type="checkbox" id="hobby1" name="reading" value="Reading">
                <label for="hobby1">Reading</label><br>
                <input type="checkbox" id="hobby1" name="typing" value="typing">
                <label for="hobby1">Typing</label><br>
                <input type="checkbox" id="hobby1" name="music" value="Music">
                <label for="hobby1">Music</label><br>
            </div>

        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for=""><strong>Choose color</strong></label>
                    <input type="color" name="color" value="color">
                </div>
            </div>
            <div class="col-md-6">
                <label for=""><strong>Choose file</strong></label></label>
                <input type="file" name="file">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <input type="submit" value="Update Student" class="btn btn-primary float-right">
                </div>
            </div>
        </div>
    </form>
</div>
</body>
<?php
//echo'<pre>';
//session_start();
//echo '<pre>';
//print_r($_SESSION);
//echo '</pre>';
?>