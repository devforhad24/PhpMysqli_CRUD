<?php 
    $id = $_GET['id'];

    $name = $_POST['name'];
    $age = $_POST['age'];
    $roll = $_POST['roll'];
    $section = $_POST['section'];
    $address = $_POST['address'];
    $mobile = $_POST['mobile'];

    $conn = mysqli_connect('localhost', 'root', '', 'sms');
    $sql = "UPDATE students SET name = '$name', age ='$age', roll = '$roll', section='$section', address='$address', mobile='$mobile' WHERE id = $id";

    if(mysqli_query($conn, $sql)){
        // echo "Data Inserted Successfully!";
        header("Location: show.php?id=" .$id);
    }else{
        echo "Faild To Inserted!";
    }

?>