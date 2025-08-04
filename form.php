<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form PHP</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            /* color: white; */
        }

        .container-fluid {
            /* width: 100vw; */
            height: 100vh;
            background-color: #333;

        }

        form {
            /* background-color: white; */
            padding: 12px;
            border-radius: 12px;
            width: 50%;
        }

        input {
            margin-bottom: 12px;
        }
    </style>
</head>

<body>
    <?php
    $name = $email =  $website =  $comment  = $gender = "";
    $nameErr = $emailErr =  $websiteErr =  $commentErr  = $genderErr = "";



    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        // if (isset($_POST['submit'])) {
        if (empty($_POST['name'])) {
            $nameErr = "Name is Required!";
            // echo $nameErr;
        } else {
            $name = datecleaner($_POST['name']);
        }

        if (empty($_POST['email'])) {
            $emailErr = "Email is Required!";
        } else {

            $email = datecleaner($_POST['email']);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid Email format!";
            }
        }
    }


    ?>
    <div class="container-fluid d-flex justify-content-center  align-items-center ">


        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="bg-light ">

            <div class="form-group">
                <label for="name"> Name:</label>
                <span class="text-danger">* <?php echo $nameErr; ?></span>
                <input type="text" name="name" class="form-control">

            </div>

            <div class="form-group">
                <label for="email"> E-mail:</label>
                <span class="text-danger">* <?php echo  $emailErr; ?></span>
                <input type="text" name="email" class="form-control">

            </div>

            <input type="submit" value="Submit" class="btn btn-info">
        </form>
        <?php
        function datecleaner($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        ?>
    </div>


</body>

</html>