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
        <form action="" method="post" class="mt-2">
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control" value="">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" class="form-control" value="">
            </div>
            <div class="form-group">
                <label>Message</label>
                <textarea name="message" class="form-control" value=""></textarea>
            </div>
            <br>
            <button class="btn btn-primary" type="submit" name="submit">Submit</button>
        </form>
    </div>
</body>

</html>