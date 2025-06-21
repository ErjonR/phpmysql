<?php
include_once("config.php");
$movie_name = $_POST['movie_name'];
$movie_desc = $_POST['movie_desc'];
$movie_quality = $_POST['movie_quality'];
$movie_rating = $_POST['movie_rating'];
$movie_image = $_POST['movie_image'];

$sql ="INSERT INTO movies(movie_name,
                       movie_name,
                       movie_name,
                       movie_name,
                       movie_image) VALUES
                       (:movie_name,
                       :movie_desc,
                       :movie_quality,
                       :movie_rating,
                       :movie_image),";

$inserMovie = $conn->prepare($sql);

$inserMovie->bindParam(':movie_name', $movie_name);
$inserMovie->bindParam(':movie_name', $movie_desc);
$inserMovie->bindParam(':movie_name', $movie_quality);
$inserMovie->bindParam(':movie_name', $movie_rating);
$inserMovie->bindParam(':movie_name', $movie_image);

$insertMovie->execute();

header("Location: movie.php");



?>