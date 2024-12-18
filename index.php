

<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./input.css">
  <link href="./output.css" rel="stylesheet">
</head>
<body>
  <!-- component -->
<div class="h-100 w-full flex items-center justify-center bg-teal-lightest font-sans">
	<div class="bg-white rounded shadow p-6 m-4 w-full lg:w-3/4 lg:max-w-lg">
        <div class="mb-4">
            <h1 class="text-grey-darkest">Todo List</h1>
            <form method="post" class="flex mt-4">
                <input name="content" class="shadow appearance-none border rounded w-full py-2 px-3 mr-4 text-grey-darker" placeholder="Add Todo">
                <input type="submit" class="flex-no-shrink p-2 border-2 rounded text-teal border-teal hover:text-white hover:bg-teal" value="add">

            </form>
            <form method="post" class="flex mt-4">
                <input name="update" class="shadow appearance-none border rounded w-full py-2 px-3 mr-4 text-grey-darker" placeholder="Add Todo">
                <input type="submit" class="flex-no-shrink p-2 border-2 rounded text-teal border-teal hover:text-white hover:bg-teal" value="Update">
            </form>
        </div>
        <div>
            <div class="flex team mb-4 items-center">

            <?php 
            require_once("./config.php");


            $sql = "SELECT * FROM todos";

            if($result = mysqli_query($link, $sql)){
            
                if (mysqli_num_rows($result) > 0) {
                    while($todo = mysqli_fetch_array($result)){
            ?>      

                <p class='w-full text-grey-darkest'><?php echo $todo['content']?></p>
                <button class="flex-no-shrink p-2 ml-4 mr-2 border-2 rounded hover:text-white text-green border-green hover:bg-green">Done</button>
                <button class="flex-no-shrink p-2 ml-2 border-2 rounded text-red border-red hover:text-white hover:bg-red">Remove</button>
                    
           <?php 
               }
               }else{
                   echo "you have no rows in the data";
               }
               }else{
                echo "no connection with db";
               };
            ?>
                
            <?php
                require "./create.php";
                require "./update.php";
            ?>
            
                
                
                
            </div>
        </div>
    </div>
</div>
</body>
</html>