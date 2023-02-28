<?php
require_once "./core/functions.php";
require_once "./core/connection.php";

if($_SERVER["REQUEST_METHOD"] === "POST"){
    $id = $_POST["id"];
    $sql = "DELETE FROM students WHERE id=$id";

    if(mysqli_query($connD,$sql)){
        header("LOCATION:list-index.php");
    }
}