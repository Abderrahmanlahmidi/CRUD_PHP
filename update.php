<?php

require_once "config.php";

$content = $content_err = "";

// if(isset($_POST['id']) && !empty($_POST['id'])){

    $todo = $_POST['update'];

    if(empty($todo)){
      $content_err = "please enter a todo"; 
    }else{
       $content  = $todo;
    }

    if (empty($content_err)) {

        $sql = "UPDATE todos SET content WHERE id = ?";

        if($stmt  = mysqli_prepare($link, $sql)){
            mysqli_stmt_bind_param($stmt, "si", $content, $id = 1);
        }

        if (mysqli_stmt_execute($stmt)) {
            header("location:index.php");
            exit();
        }else{
            echo "Oop something went wrong";
        }


    }

    mysqli_stmt_close($stmt);



// }


?>