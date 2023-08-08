<?php
                                             // Database connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "employees";
    
                                              // create a connection
    $conn = mysqli_connect($servername, $username, $password, $database);
    
                                     // Die if connection was not successful                                     
 if (!$conn){
    die("Sorry we failed to connect : " . mysqli_connect_error());
}
else{
   echo "CONNECTION WAS SUCCESSFULL <br>";
    }
                                      
                                             //Delete data in table
   $sql = "DELETE FROM `intern` WHERE `Name`='[Nidhi]';"; 
   $result = mysqli_query($conn, $sql);

 
                                     //check for data deletion success
if ($result){
    echo "Data deleted successfully";
}
else{
     echo" Data not deleted beacuse of this error ------>" . mysqli_error($conn);
    } 


?>