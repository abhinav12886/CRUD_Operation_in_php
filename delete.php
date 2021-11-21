<?php
    $con = mysqli_connect('localhost','root');
    mysqli_select_db($con, 'crud_operation');
    
    if(!$con){
        die("Sorry unable to connect". mysqli_connect_error());
        
    }
    else{
        echo "connection was successfull<br>";
        }

    $id = $_GET['id']; //we are storing id of data item from display.php which is being clicked to delete.
    $q = "DELETE FROM `crud_table` WHERE id = $id"; //here we are passing the id number of the deleted data item.
                                                    //in the form of sql query.
    mysqli_query($con, $q);
    header('location:display.php'); //header is used when we want to perform an operation and 
                                    //wanted to be at that same page rather than being transferred to a new webpage.    
                                    //in this case it will remain on the display.php page
    
?>