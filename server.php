<?php 

// connecting to database

$db= mysqli_connect("localhost", "root", "", "ckeditor-image");

// retrieve posts from database
$results = mysqli_query($db, "SELECT * FROM posts");
$posts = mysqli_fetch_all($results, MYSQL_ASSOC);



?>