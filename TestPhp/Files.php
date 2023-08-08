<?php
$a= readfile("myfile.txt");
echo $a; // to know total words

readfile("myfile.txt");

$fptr = fopen("myfile.txt", "r");
//echo var_dump($fptr);

if(!$fptr){
    die("Unable to pen file. Please enter avalid filename");
}
$content = fread($fptr, filesize("myfile.txt"));
echo $content;
fclose($fptr);

?>