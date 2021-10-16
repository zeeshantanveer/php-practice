<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
        #h2 {
            background-color: blue;
        }

        .error {
            color: red;
        }

    </style>
</head>
<body>
<?php
$name = $email = $gender = $comment = $website = "";
$nameErr = $emailErr = $genderErr = $commentErr = $websiteErr = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
    }
    if (empty($_POST["email"])) {
        $emailErr = "email is required";
    } else {
        $email = test_input($_POST["email"]);
    }
    if (empty($_POST["commment"])) {
        $commentErr = "comment is required";
    } else {
        $comment = test_input($_POST["commment"]);
    }
    if (empty($_POST["gender"])) {
        $genderErr = "gender is required";

    } else {
        $gender = test_input($_POST["gender"]);
    }
    if (empty($_POST["website"])) {
        $websiteErr = "Website is required";

    } else {
        $website = test_input($_POST["website"]);
    }
}
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>

<div class="row mt-5">
    <div class="col-lg-2"></div>
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header">
                <div class="">Form Validation</div>
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">
                            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                                <div>
                                    <label for="">Name: *</label>
                                    <input class="form-control" type="text" name="name" value="<?php echo $name; ?>">
                                    <span class="error"> <?php echo $nameErr; ?></span>
                                </div>
                                <div>
                                    <label for="">Email: *</label>
                                    <input class="form-control" type="text" name="email" value="<?php echo $email; ?>">
                                    <span class="error"> <?php echo $emailErr; ?></span>
                                </div>
                                <div>
                                    <label for="">Website: *</label>
                                    <input class="form-control" type="text" name="website" value="<?php echo $website; ?>">
                                    <span class="error"><?php echo $websiteErr; ?></span>
                                </div>
                                <div>
                                    <label for="">Comment: *</label>
                                    <textarea class="form-control" name="commment" rows="5" cols="40"><?php echo $comment; ?></textarea>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender"
                                           value="female" <?php if ($gender == 'female') {
                                        echo 'checked';
                                    } ?>>
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Female
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender"
                                           value="male" <?php if ($gender == 'male') {
                                        echo 'checked';
                                    } ?>>
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Male
                                    </label>
                                    <span class="error"><?php echo $genderErr; ?></span>
                                </div>
                                <input class="btn btn-primary" type="submit" name="submit" value="Submit">

                            </form>
                        </div>
                        <div class="col-md-1"></div>
                    </div>
                </ul>
            </div>
            <div class="card-body">
                Developed By: Alia
            </div>
        </div>
    </div>
    <div class="col-lg-2"></div>
</div>
<div class="row mt-5">
    <div class="col-lg-2"></div>
    <div class="col-lg-8">
        <div class="table-responsive">
            <table class="table">
                <thead class="table-dark">
                <tr>
                    <th class="table-primary">Name</th>
                    <th class="table-secondary">Email</th>
                    <th class="table-secondary">Website</th>
                    <th class="table-secondary">Comment</th>
                    <th class="table-secondary">Gender</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th class="table-primary"><?php echo $name; ?></th>
                    <th class="table-secondary"><?php echo $email; ?></th>
                    <th class="table-secondary"><?php echo $website; ?></th>
                    <th class="table-secondary"><?php echo $comment; ?></th>
                    <th class="table-secondary"><?php echo $gender; ?></th>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="col-lg-2"></div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

</body>
</html>
