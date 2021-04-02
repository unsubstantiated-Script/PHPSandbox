<?php
require 'config/config.php';
require 'config/db.php';

//Check for submit

if (isset($_POST['submit'])) {

    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $body = mysqli_real_escape_string($conn, $_POST['body']);
    $author = mysqli_real_escape_string($conn, $_POST['author']);

    $query = "INSERT INTO posts(title, author,body) VALUES('$title', '$author', '$body')";

    if (mysqli_query($conn, $query)) {
        header('Location: ' . ROOT_URL . '');
    } else {
        echo 'Error: ' . mysql_error($conn);
    }
}
?>

<?php include 'inc/header.php';?>

<div class="container ">

    <h1>Add Post</h1>
    <form method="POST" action="<?php $_SERVER['PHP_SELF'];?>">
        <div class="form-group">
            <label>Title</label>
            <input type="text" name="title" class="form-control">
        </div>
        <div class="form-group">
            <label>Author</label>
            <input type="text" name="author" class="form-control">
        </div>
        <div class="form-group">
            <label>Body</label>
            <textarea name="body" class="form-control"></textarea>
        </div>
        <input type="submit" name="submit" class="btn btn-dark" value="Submit">
    </form>
</div>

<?php include 'inc/footer.php';