<?php
    include('layout_manager.php');
    include('content_function.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/styles/main.css" type="text/css" rel="stylesheet"/>
    <link rel="stylesheet" href="/project_php/main.css"/>
    <title>Document</title>
</head>
<body>
    <div class="pane">
        <div class="header">
            <h1><a href="/project_php">PHP and SQL forum</a></h1>
        </div>
        <div class="loginpane">
            <?php
                session_start();
                if (isset($_SESSION['username'])){
                    logout();
                    //logout
                }else{
                    if(isset($_GET['status'])){
                        if($_GET['status']=='reg_success'){
                            echo "<h1 style=;color:green;> 'new user registered' </h1>";
                        } else if ($_GET['status']=='login_fail') {
                            echo "<h1 style='color: red;'>Invalid user name </h1>";
                        }
                    }
                    loginform();
                }
            ?>
        </div>
        <div class="forumdesc">
            <p>Welcome to the fastest forum.....for noobs like us!!</p>
        </div>
        <div class="content">
            <?php
                dispcategories();
            ?>
        </div>
    </div>
</body>
</html>