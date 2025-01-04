<?php
    $conn = mysqli_connect('localhost', 'root', '', 'sms');
    $sql = "SELECT * FROM students";
    $result = mysqli_query($conn, $sql);
    $count = 0;
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
                <h2>Student List</h2>
                <div class="d-grid d-md-flex justify-content-md-end">
                    <a href="insert.php" class="btn btn-success mb-2">Add New</a>
                </div>

                <table class="table table-bordered table-success table-striped">
                    <thead>
                        <tr>
                            <th>SL.</th>
                            <th>NAME</th>
                            <th>AGE</th>
                            <th>ROLL</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = mysqli_fetch_assoc($result)) {
                            $count++ ?>
                            <tr>
                                <td><?php echo $count; ?></td>
                                <td><?php echo $row['name']; ?></td>
                                <td><?php echo $row['age']; ?></td>
                                <td><?php echo $row['roll']; ?></td>
                                <td width="20%">
                                    <a href="edit.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-primary">Edit</a>
                                    <a href="show.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-info">View</a>
                                    <a href="delete.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure to delete this?')">Delete</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
    <!-- table endss -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>