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

    <form action="Student.php" method="post" class="">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" name="name" class="form-control">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" name="email" class="form-control">

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Address</label>
                    <input type="text" name="Address" class="form-control">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Roll NO</label>
                    <input type="number" name="Roll No" class="form-control">
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <input type="submit" value="Submit" class="btn btn-primary float-right">
                </div>
            </div>
        </div>

    </form>
</div>
<script src="assets/bootstrap_4/js/bootstrap.bundle.js"></script>
</body>
</html>