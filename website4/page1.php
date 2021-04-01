<?php
if (isset($_POST['submit'])) {
    session_start(); //Starts the session

    $_SESSION['name'] = htmlentities($_POST['name']);
    $_SESSION['email,'] = htmlentities($_POST['email']);

    header('Location: page2.php');
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>PHP Sessions</title>
</head>

<body>
    <div class="container">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" class="mt-2">
            <div class="form-group">
                <label for="name">Enter Name</label>
                <br>
                <input type="text" name="name">
            </div>
            <div class="form-group">
                <label for="name">Enter Email</label>
                <br>
                <input type="text" name="email">
            </div>
            <input class="btn btn-dark" type="submit" name="submit" value="Submit">

        </form>
    </div>

</body>

</html>