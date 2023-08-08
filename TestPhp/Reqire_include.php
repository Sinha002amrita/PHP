<?php
//include '_employees.php';
//require '_employees.php';

$sql= "SELECT * FROM 'employees'";
$result= mysqli_query($conn, $sql);

//find number of records returned
$num= mysqli_num_rows($result);
echo $num;
echo "records found in database <br>";
while($row = mysqli_fetch_assoc($result)) {
    //echo var_dump($row);
    echo $row['Sno'] . ". Hello" . $row['name'] . "Welcome to" . $row ['gender'];
    echo "<br>";
}
?>