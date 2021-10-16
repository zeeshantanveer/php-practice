<!DOCTYPE html>
<html lang="en" class="height-full">
<head>
    <meta charset="utf-8">

    <link rel="stylesheet" href="assets/css/github1.css"/>

    <link rel="stylesheet" href="assets/css/github2.css"/>

    <link rel="stylesheet" href="assets/css/github3.css"/>

    <style>
        #dataArray{
            color: white;
        }
    </style>

</head>
<body class="logged-out env-production page-responsive height-full d-flex flex-column header-overlay" style="word-wrap: break-word;">
<main class="js-warp-hide bg-gray-dark-mktg d-flex flex-auto flex-column overflow-hidden position-relative">
        <div>
            <div class="signup-bg-stars"></div>
            <div class="signup-bg-stars-2"></div>
            <div class="signup-bg-stars-3"></div>
        </div>
    <div id="dataArray">
        <?php
        $data['name'] = 'AliaZeeshan';
        $data['email'] = 'AliaZeeshan@gmail.com';
        $data['gpa'] = '3.25';
        $data['phone'] = '1234567890';
        echo '<pre>';
        print_r($data);
        echo '</pre>';

        $jsonString = json_encode($data);
        echo $jsonString;

        $decodedJson = json_decode($jsonString,true);
        echo '<pre>';
        print_r($decodedJson);
        echo '</pre>';
        ?>
    </div>
    </main>
</body>
</html>

