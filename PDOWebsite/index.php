<?php

$host = 'localhost';
$user = 'root';
$password = '123456';
$dbname = 'pdoposts';

//Set DSN
$dsn = 'mysql:host=' . $host . ';dbname=' . $dbname;

//Create a PDO instance
$pdo = new PDO($dsn, $user, $password);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

# PDO Query
// $stmt = $pdo->query('SELECT * FROM post');

//Fetching the data
// while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
//     echo $row['title'] . '<br>';
// }

// while ($row = $stmt->fetch()) {
//     echo $row->title . '<br>';
// }

#Prepared statements (prepare and execute)

//UNSAFE!
// $sql = "SELECT * FROM post WHERE author = '$author'";

//FETCH Multiple posts

//User Input
$author = 'Tex Avery';
$is_published = true;
$id = 1;

//Positonal params
// $sql = "SELECT * FROM post WHERE author = ?";
// $stmt = $pdo->prepare($sql);
// $stmt->execute([$author]);
// $posts = $stmt->fetchAll();

//Named Params
// $sql = "SELECT * FROM post WHERE author = :author && is_published = :is_published";
// $stmt = $pdo->prepare($sql);
// $stmt->execute(['author' => $author, 'is_published' => $is_published]);
// $posts = $stmt->fetchAll();

// // var_dump($posts);

// foreach ($posts as $post) {
//     echo $post->title . '<br>';
// }

// //FETCH Single Post
// $sql = "SELECT * FROM post WHERE id = :id";
// $stmt = $pdo->prepare($sql);
// $stmt->execute(['id' => $id]);
// $post = $stmt->fetch();

//  echo $post->body;

// $stmt = $pdo->prepare("SELECT * FROM post WHERE author = ?");
// $stmt->execute([$author]);

// $postCount = $stmt->rowCount();

// echo $postCount;

//Insert Data
// $title = 'Post Five ';
// $body = 'Stayin alive ';
// $author = 'Kevin! ';

// $sql = 'INSERT INTO post(title, body, author) VALUES(:title, :body, :author)';
// $stmt = $pdo->prepare($sql);
// $stmt->execute(['title' => $title, 'body' => $body, 'author' => $author]);
// echo 'Post Added';

//Update Data
// $id = 5;
// $body = 'Stayin alive 2';

// $sql = 'UPDATE post SET body = :body WHERE id =:id';
// $stmt = $pdo->prepare($sql);
// $stmt->execute(['body' => $body, 'id' => $id]);
// echo 'Post Updated';

//Delete Data
// $id = 5;

// $sql = 'DELETE FROM post WHERE id =:id';
// $stmt = $pdo->prepare($sql);
// $stmt->execute(['id' => $id]);
// echo 'Post Deleted';

//Search Data
// $search = "%1%";
// $sql = 'SELECT * FROM post WHERE title LIKE ?';
// $stmt = $pdo->prepare($sql);
// $stmt->execute([$search]);
// $posts = $stmt->fetchAll();

// foreach ($posts as $post) {
//     echo $post->title . '<br>';
// }