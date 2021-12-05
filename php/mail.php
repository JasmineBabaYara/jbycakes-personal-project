 <?php
    //variable declaration and assigning
    require('./config.php');
    if(isset($_POST['order'])){
        $name = $_POST['name'];
        $loc = $_POST['location'];
        $cont = $_POST['phone'];
        $cake = $_POST['preferredcake'];

        //inserting data into the rightful columns
        $sql = "INSERT INTO book(name, location, contact, cake) VALUES('$name', '$loc', '$cont', '$cake')";
        $result = mysqli_query($dbcon, $sql);

        //if statement to determine the status of the connection and insertion
        if($result){
            //header('location: ../index.html');
            echo 
            "<script>
                alert('Order Successful');
                window.location='../index.html'
            </script>";
        }else{
            echo 
            "<script>
                alert('Please Try Again');
                window.location='../index.html'
            </script>";
        }
    }




?>