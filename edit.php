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
            <div class="d-grid d-md-flex justify-content-md-end">
                <a href="index.php" class="btn btn-secondary mb-2">BACK</a>
            </div>
            <div class="col-md-12">
                <h2>Edit Student</h2>
                <form action="update.php?id=<?php echo $id ?>" method="POST">
                    <div class="form-group mb-2">
                        <label for="name">Name</label>
                        <input type="text" name="name" value="<?php echo $std['name'] ?>" class="form-control" Required>
                    </div>
                    <div class="form-group mb-2">
                        <label for="age">Age</label>
                        <input type="text" name="age" value="<?php echo $std['age'] ?>" class="form-control">
                    </div>
                    <div class="form-group mb-2">
                        <label for="roll">Roll</label>
                        <input type="text" name="roll" value="<?php echo $std['roll'] ?>" class="form-control" Required>
                    </div>
                    <div class="form-group mb-2">
                        <label for="section">Section</label>
                        <input type="text" name="section" value="<?php echo $std['section'] ?>" class="form-control" Required>
                    </div>
                    <div class="form-group mb-2">
                        <label for="address">Address</label>
                        <input type="text" name="address" value="<?php echo $std['address'] ?>" class="form-control">
                    </div>
                    <div class="form-group mb-2">
                        <label for="mobile">Mobile</label>
                        <input type="text" name="mobile" value="<?php echo $std['mobile'] ?>" class="form-control" Required>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Update</button>
                    </div>
                </form>

            </div>

        </div>
    </div>
    <!-- table endss -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>