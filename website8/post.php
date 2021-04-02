<?php
require 'config/config.php';
require 'config/db.php';

if (isset($_POST['delete'])) {

    $delete_id = mysqli_real_escape_string($conn, $_POST['delete_id']);

    $query = "DELETE FROM posts WHERE id={$delete_id}";

    if (mysqli_query($conn, $query)) {
        header('Location: ' . ROOT_URL . '');
    } else {
        echo 'Error: ' . mysql_error($conn);
    }
}

$id = mysqli_real_escape_string($conn, $_GET['id']);

//Create Query
$query = 'Select * FROM posts WHERE id = ' . $id;

//Get Results
$result = mysqli_query($conn, $query);

//Fetch data
$post = mysqli_fetch_assoc($result);
// var_dump($posts);

//Free the result
mysqli_free_result($result);

//Close connection
mysqli_close($conn);
?>

<?php include 'inc/header.php';?>


<div class="container ">
    <a href="<?php echo ROOT_URL; ?>" class="btn btn-light">Back</a>
    <h1><?php echo $post['title']; ?></h1>
    <small>Created on: <?php echo $post['created_at']; ?> by <?php echo $post['author']; ?>
    </small>
    <p><?php echo $post['body']; ?></p>
    <hr>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" class="float-right" method="POST">
        <input type="hidden" name="delete_id" value="<?php echo $post['id']; ?>">
        <input type="submit" name="delete" class="btn btn-danger" value="Delete">
    </form>
    <a href="<?php echo ROOT_URL; ?>editpost.php?id=<?php echo $post['id']; ?>" class="btn btn-dark">Edit</a>
</div>



<?php include 'inc/footer.php';?>