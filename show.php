<?php 
    $id = $_GET['id'];

    $conn = mysqli_connect('localhost','root','','sms');

    $sql = "SELECT * FROM students WHERE id = $id";
    $result = mysqli_query($conn, $sql);

    $std = mysqli_fetch_assoc($result);

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>PHP MYSQLi CRUD</title>
</head>

<body>

    <br>
    <!-- table starts -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Student Details</h2>
                <div class="d-grid d-md-flex justify-content-md-end">
                    <a href="index.php" class="btn btn-success mb-2">BACK</a>
                </div>

                <table class="table">
                    <tr>
                        <th class="d-grid d-md-flex justify-content-md-end">NAME : </th>
                        <td><?php echo $std['name']; ?></td>
                    </tr>
                    <tr>
                        <th class="d-grid d-md-flex justify-content-md-end">AGE : </th>
                        <td><?php echo $std['age']; ?></td>
                    </tr>
                    <tr>
                        <th class="d-grid d-md-flex justify-content-md-end">ROLL : </th>
                        <td><?php echo $std['roll']; ?></td>
                    </tr>
                    <tr>
                        <th class="d-grid d-md-flex justify-content-md-end">SECTION : </th>
                        <td><?php echo $std['section']; ?></td>
                    </tr>
                    <tr>
                        <th class="d-grid d-md-flex justify-content-md-end">ADDRESS : </th>
                        <td><?php echo $std['address']; ?></td>
                    </tr>
                    <tr>
                        <th class="d-grid d-md-flex justify-content-md-end">MOBILE : </th>
                        <td><?php echo $std['mobile']; ?></td>
                    </tr>
                </table>
            </div>

        </div>
    </div>
    <!-- table endss -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>