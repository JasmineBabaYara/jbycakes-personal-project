<?php
//variable declaration and assigning
require('./config.php');
if (isset($_POST['review'])) {
    $text = $_POST['reviewtext'];

    //inserting data into the rightful column
    $sql = "INSERT INTO review(thoughts) VALUES('$text')";
    $result = mysqli_query($dbcon, $sql);

    //if statement to determine the status of the connection and insertion
    if ($result) {
        //header('location: ../index.html');
        echo 
        "<script>
            alert('Order Successful');
            window.location='../index.html'
        </script>";
    } else {
        echo
        "<script>
            alert('Please Try Again');
            window.location='../index.html'
        </script>";
    }
}
