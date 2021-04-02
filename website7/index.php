<?php

$path = '/dir0/dir1/myfile.php';
$file = 'file1.txt';

//Return filename
// echo basename($path);

//Return filename without ext
// echo basename($path, '.php');

// echo dirname($path);

// echo file_exists($file);

//Get abs path
// echo realpath($file);

//Checks to see if file exists
// echo is_file($file);

// //Check if writeable
// echo is_writable($file);

// //Check if readable
// echo is_readable($file);

// //Get filesize
// echo filesize($file);

//Create a directory
// mkdir('testing');

//Delete a directory as long as there are no files in it
// rmdir('testing');

//Copy file
// echo copy('file1.txt', 'file2.txt');

//Rename a file
// rename('file2.txt', 'thisfileImade.txt');

//Delete a file
// unlink('thisfileImade.txt');

//Write from file to string in browser
// echo file_get_contents($file);

//Write string to file -- replaces the content
// echo file_put_contents($file, 'Goodbye the filler!');

//Writing to file but adding on

// $current = file_get_contents($file);

// $current .= ' Some more stuff!';

// file_put_contents($file, $current);

// Open file for reading
// $handle = fopen($file, 'r');
// $data = fread($handle, filesize($file));
// echo $data;

//Open file for writing
$handle = fopen('file2.txt', 'w');
$text = "Yamma lamma ding dong!\n";
fwrite($handle, $text);
$text = "I told the witchdoctor!\n";
fwrite($handle, $text);
fclose($handle);