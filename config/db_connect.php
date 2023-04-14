<?php

$conn = mysqli_connect('localhost', 'omare', 'test1234', 'omare_pizza');

if(!$conn){
    echo 'Connection error: ' . mysqli_connect_error();
}

?>