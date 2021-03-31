<?php

//Message vars
$msg = '';
$msgClass = '';

//Check for submit
if (filter_has_var(INPUT_POST, 'submit')) {
    //Get Form Data;
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    //Check required fields

    if (!empty($name) && !empty($email) && !empty($message)) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
            $msg = 'Please use a valid email!';
            $msgClass = 'alert-danger';
        } else {
            $toEmail = 'email@gmail.com';
            $subject = 'Contact request from ' . $name;
            $body = '<h2>Contact Request</h2>
            <h4>Name</h4><p>' . $name . '</p>
            <h4>Email</h4><p>' . $email . '</p>
            <h4>Message</h4><p>' . $message . '</p>';

            //Email Headers
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-Type:text/html;charset-UTF-8" . "\r\n";

            //Additional headers...
            $headers .= "From: " . $name . "<" . $email . ">" . "\r\n";

            if (mail($toEmail, $subject, $body, $headers)) {
                $msg = 'Your email has been sent';
                $msgClass = 'alert-success';
            } else {
                $msg = 'Your email has not been sent...';
                $msgClass = 'alert-danger';
            }
        }
    } else {
        $msg = 'Please fill in all fields';
        $msgClass = 'alert-danger';
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Contact Us!</title>
</head>

<body>
    <nav class="navbar navbar-dark bg-primary">
        <div class="container">
            <div class="navbar-header">
                <div class="navbar-brand" href="index.php">My Website!</div>
            </div>
        </div>
    </nav>

    <div class="container">


        <?php if ($msg != ''): ?>
        <div class="alert <?php echo $msgClass; ?>"><?php echo $msg; ?>
        </div>
        <?php endif;?>


        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="mt-2">
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control" value="<?php echo isset($_POST['name']) ? $name : ''; ?>
">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" class="form-control" value="<?php echo isset($_POST['email']) ? $email : ''; ?>
">
            </div>
            <div class="form-group">
                <label>Message</label>
                <textarea name="message" class="form-control"><?php echo isset($_POST['message']) ? $message : ''; ?>
                </textarea>
            </div>
            <br>
            <button class="btn btn-primary" type="submit" name="submit">Submit</button>
        </form>
    </div>
</body>

</html>