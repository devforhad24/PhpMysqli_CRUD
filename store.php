<?php 
    $name = $_POST['name'];
    $age = $_POST['age'];
    $roll = $_POST['roll'];
    $section = $_POST['section'];
    $address = $_POST['address'];
    $mobile = $_POST['mobile'];

    $conn = mysqli_connect('localhost', 'root', '', 'sms');
    $sql = "INSERT INTO students VALUES (NULL, '$name',$age,$roll,'$section','$address',$mobile)";

    if(mysqli_query($conn, $sql)){
        // echo "Data Inserted Successfully!";
        header("Location: index.php");
    }else{
        echo "Faild To Inserted!";
    }

?>