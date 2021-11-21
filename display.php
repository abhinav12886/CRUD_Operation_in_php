<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crud</title>
</head>
<body>
    <div class="container">
        <h1>Dispaly table data</h1>
        <table>
            <tr>
                <th>id</th>
                <th>username</th>
                <th>password</th>
                <th>delete</th>
                <th>update</th>
            </tr>
            <?php
                $con = mysqli_connect('localhost','root');
                mysqli_select_db($con, 'crud_operation');
                
                if(!$con){
                    die("Sorry unable to connect". mysqli_connect_error());
                    
                }
                else{
                    echo "connection was successfull<br>";
                    }

                $q = "select * from crud_table";

                //now we have to fire this above query 
                $query = mysqli_query($con,$q); //we stored all the table data in this variable
                //to fetch and display data we use while loop
                while($res = mysqli_fetch_array($query)){
                    //we used mysqli_fetch_array to display all data from $query array one by one
            ?>
                    <tr>
                        <td><?php echo $res['id']; ?></td>
                        <td><?php echo $res['username']; ?></td>
                        <td><?php echo $res['password']; ?></td>
                        <td><button><a href="delete.php?id=<?php echo $res['id']; ?>">Delete</a></button></td>
                        <td><button><a href="update.php?id=<?php echo $res['id']; ?>">Update</a></button></td>
                    </tr>
                <?php
                    }
                ?> 
        </table>
    </div>

</body>
</html>