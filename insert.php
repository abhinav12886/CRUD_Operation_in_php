<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud_Operation</title>
</head>
<body>
    <div class="container">
        <form action="" method="post">
            <table>
                <!-- <tr>
                    <td>
                        <label for="id">user_id</label><br>
                        <input type="number" require id="user_id" name="user_id">
                        <button>delete</button>
                        <button>update</button>
                    </td>
                </tr> -->
                <tr>
                    <td>
                        <label for="username">username</label><br>
                        <input type="text" require id="user_name" name="username">
                        <!-- <button>delete</button>
                        <button>update</button> -->
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="password">password</label><br>
                        <input type="text" require id="pass_word" name="password">
                        <!-- <button>delete</button>
                        <button>update</button> -->
                    </td>
                </tr>
                <tr>
                    <td>
                        <button type="submit" name="submit">Submit(insert operation)</button>
                    </td>
                    
                </tr>
                <tr>
                    <td>
                        <button type="submit" name="display" ><a href="display.php" target="_blank">display</a></button>
                    </td>
                </tr>
            </table>
        </form>
    </div>
    
</body>
</html>




<?php
    //Establishing connection with database
    $con = mysqli_connect('localhost','root');
    mysqli_select_db($con, 'crud_operation');

    if(!$con){
        die("Sorry unable to connect". mysqli_connect_error());
    
    }
    else{
        echo "connection was successfull<br>";
    }

    //insert operation
    if(isset($_POST['submit'])){
        //query to insert data
        $username = $_POST['username']; //collecting username data 
        $password = $_POST['password']; //collecting userpassword and storing it in $password variable
        $q = "INSERT INTO `crud_table`(`username`, `password`) VALUES ('$username','$password')";

        //now we have to fire this above query 
        $query = mysqli_query($con, $q);
    }


?>