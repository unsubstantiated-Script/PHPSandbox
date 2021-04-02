<?php
require 'config/config.php';
require 'config/db.php';

//Create Query
$query = 'Select * FROM posts ORDER BY created_at DESC';

//Get Results
$result = mysqli_query($conn, $query);

//Fetch data
$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
// var_dump($posts);

//Free the result
mysqli_free_result($result);

//Close connection
mysqli_close($conn);
?>

<?php include 'inc/header.php';?>


<div class="container ">

    <h1>Posts</h1>
    <?php foreach ($posts as $post): ?>
    <div class="bg-dark text-light p-3 m-3">
        <h3><?php echo $post['title']; ?></h3>
        <small>Created on: <?php echo $post['created_at']; ?> by <?php echo $post['author']; ?>
        </small>
        <p><?php echo $post['body']; ?></p>
        <a class="btn btn-light" href="<?php echo ROOT_URL; ?>post.php?id=<?php echo $post['id']; ?>">Read More</a>
    </div>
    <?php endforeach;?>
</div>

<?php include 'inc/footer.php';