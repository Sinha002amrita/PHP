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

                                          //create a Database
$sql = "CREATE DATABASE h5";
$result = mysqli_query($conn, $sql);
echo "The result is " . var_dump($result);

                                //check for the database connection success
if ($result){
    echo "DB created successfully";
}
else{
     echo" DB not created beacuse of this error ------>" . mysqli_error($conn);
    }

                                       // create a table in Database
$sql = "CREATE TABLE `tripdetails` (`S.No` INT(4) NOT NULL , `Name` VARCHAR(11) NOT NULL , `DOJ` DATE NOT NULL , `Gender` VARCHAR(10) NOT NULL )";
$result = mysqli_query($conn, $sql);
//echo "The result is " . var_dump($result);
//mysqli_query($conn, $sql);

                                    //check for table creation success
if ($result){
    echo "Table created successfully";
}
else{
     echo" Table not created beacuse of this error ------>" . mysqli_error($conn);
    }


                                              //Insert data in table
                                       //variables to be inserted in table
/*$Sno = "3";
$name = "Aditi";
$date = "2023-07-25";
$gender = "Female";
 
$sql = "INSERT INTO `intern` ('S.No' , 'Name`, `DOJ`, `Gender`) VALUES ('$Sno', '$name', '$date', '$gender')";
$result = mysqli_query($conn, $sql);
*/

$sql = "INSERT INTO `intern` (`S.No`, `Name`, `DOJ`, `Gender`) VALUES ('1', 'Nisha', '2013-07-22', 'Female')";
$result = mysqli_query($conn, $sql);

 
                                     //check for data insertion success
if ($result){
    echo "Data inserted successfully";
}
else{
     echo" Data not inserted beacuse of this error ------>" . mysqli_error($conn);
    }


                                            //Update data in table
   $sql = "UPDATE `intern` SET `S.No`='[2]',`Name`='[Nidhi]',`DOJ`='[2023-07-27]',`Gender`='[Female]' WHERE 1;"; 
   $result = mysqli_query($conn, $sql);

 
                                     //check for data updation success
if ($result){
    echo "Data updated successfully";
}
else{
     echo" Data not updated beacuse of this error ------>" . mysqli_error($conn);
    } 
          
    
    ////Update data in table
   $sql = "UPDATE `intern` SET `S.No`='[2]',`Name`='[Nidhi]',`DOJ`='[2023-07-27]',`Gender`='[Female]' WHERE 1;"; 
   $result = mysqli_query($conn, $sql);

 
                                     //check for data updation success
if ($result){
    echo "Data updated successfully";
}
else{
     echo" Data not updated beacuse of this error ------>" . mysqli_error($conn);
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