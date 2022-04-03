<?php 
    require 'connect.php';
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $title = $_POST["title"];
        $thumb = $_POST["thumbnail"];
        $source = $_POST["source"];
        $blog = $_POST["blog"];
        $sql = "INSERT INTO project (title, thumbnail, source, blog) VALUES ('$title', '$thumb', '$source', '$blog')";

        if ($conn->query($sql)===TRUE) {
            # code...
            echo "new record created successfully";
        }
        else{
            echo "error: ". $sql. "<br>" . $conn->error;
        }
    }
    $conn->close();
    header('Location: form.php');
?>