<?php



require_once "config.php";

$todo = $todo_err = "";

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $content_input = $_POST['content'];

    if (empty($content_input)) {
       $todo_err = "please enter content";
    }else{
        $todo = $content_input;
    }

    if (empty($todo_err)) {
        $sql = "INSERT INTO todos (content) VALUES (?)";

        if($stmt = mysqli_prepare($link, $sql)){
            mysqli_stmt_bind_param($stmt, "s", $todo);
        }

        if (mysqli_stmt_execute($stmt)) {
            header("location:index.php");
            exit();
        }else{
            echo "Oop something went wrong";
        }

    }

    mysqli_stmt_close($stmt);


}

mysqli_close($link);

?>