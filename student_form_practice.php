<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/bootstrap_4/css/bootstrap.min.css">
    <title>Student Form</title>
</head>
<body>
<div class="container">
    <div class="jumbotron">
        <h1>Student Form</h1>
    </div>
    <form action="Student.php" method="post">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" name="name" placeholder="Name" class="form-control">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" name="Email" placeholder="Email" class="form-control">
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="Password" name="password" placeholder="Password" id="inputPassword"
                           class="form-control">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Roll No</label>
                    <input type="number" name="Roll NO" placeholder="Roll No" class="form-control">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">City Name</label>
                    <input type="text" name="city name" placeholder="City Name" class="form-control">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Mobile No</label>
                    <input type="number" name="mobile No" placeholder="Mobile  No" class="form-control">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="" class="form-label">Explain your self</label>
                    <textarea name="explain your self" cols="20" rows="5" class="form-control" placeholder="Explain your self"></textarea>
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
                <label for="">Other</label>
                <input type="radio" name="gender" value="Other">
            </div>

            <div class="col-md-6">
                <strong>Hobbies:</strong><br>
                <input type="checkbox" id="hobby1" name="hobby1" value="Reading">
                <label for="hobby1">Reading</label><br>
                <input type="checkbox" id="hobby2" name="hobby2" value="typing">
                <label for="hobby2">Typing</label><br>
                <input type="checkbox" id="hobby3" name="hobby3" value="Music">
                <label for="hobby3">Music</label><br>
            </div>

        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for=""><strong>choose color</strong></label>
                    <input type="color" name="color" value="color">
                </div>
            </div>
          <div class="col-md-6">
              <label for=""><strong>choose file</strong></label></label>
              <input type="file" name="file">
          </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <input type="submit" value="submit" class="btn btn-primary float-right">
                </div>
            </div>
        </div>
    </form>
</div>
</body>