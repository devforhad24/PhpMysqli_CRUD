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
                <h2>Add New Student</h2>
                <form action="store.php" method="POST">
                    <div class="form-group mb-2">
                        <label for="name">Name</label>
                        <input type="text" name="name" placeholder="Enter Name" class="form-control" Required>
                    </div>
                    <div class="form-group mb-2">
                        <label for="age">Age</label>
                        <input type="text" name="age" placeholder="Enter Age" class="form-control">
                    </div>
                    <div class="form-group mb-2">
                        <label for="roll">Roll</label>
                        <input type="text" name="roll" placeholder="Enter Roll" class="form-control" Required>
                    </div>
                    <div class="form-group mb-2">
                        <label for="section">Section</label>
                        <input type="text" name="section" placeholder="Enter Section" class="form-control" Required>
                    </div>
                    <div class="form-group mb-2">
                        <label for="address">Address</label>
                        <input type="text" name="address" placeholder="Enter Address" class="form-control">
                    </div>
                    <div class="form-group mb-2">
                        <label for="mobile">Mobile</label>
                        <input type="text" name="mobile" placeholder="Enter Mobile" class="form-control" Required>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Submit</button>
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