<?php
include("db.php");


if (isset($_POST['save_task'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];


    if(isset($conn)){
    $query = "INSERT INTO task(title, description) VALUES ('$title', '$description')";
    $result = mysqli_query($conn, $query);
    if(!$result) {
      die("Query Failed.");
        }
        $_SESSION['message'] = 'Task saved sucessfully';
        $_SESSION['message_type'] = 'success';
        $_SESSION['message_type1'] = 'danger';
    }

    header('Location: index.php');
  }

?>