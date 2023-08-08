<?php
/*echo "FUNDTAP";
echo "<br>";

$i=1;
do {
    echo "hello <br>";
    $i++;
}
while ($i<4);
{
    echo $i;
    echo "<br>";
    
    }
*/

// Database connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "employee";
// create a connection
    $conn = mysqli_connect($servername, $username, $password);
    
// Die if connection was not successful
    if (!$conn){
        die("Sorry we failed to connect : " . mysqli_connect_error());
    }
    else{
        echo "CONNECTION WAS SUCCESSFULL";
    }

?>