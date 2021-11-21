<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update_Operation</title>
</head>
<body>
    <div class="container">
        <form action="" method="post">
            <table>
                <tr>
                    <td>
                        <label for="username">username</label><br>
                        <input type="text" require id="user_name" name="username">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="password">password</label><br>
                        <input type="text" require id="pass_word" name="password">
                    </td>
                </tr>
                <tr>
                    <td>
                        <button type="submit" name="submit">Submit(update operation)</button>
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
</html



<?php
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
    //query to update data
        $id = $_GET['id'];
        $username = $_POST['username']; //collecting username data 
        $password = $_POST['password']; //collecting userpassword and storing it in $password variable
        $q = "UPDATE `crud_table` SET id=$id, username='$username', password='$password' WHERE id='$id'";

        //now we have to fire this above query 
        $query = mysqli_query($con, $q);
        header("location:display.php"); 
    }
  

?>