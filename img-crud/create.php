<?php
session_start();
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>php - image crud</title>
</head>

<body>

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Insert Data in PHP</h5>
                    </div>
                    <div class="card-body">
                        <?php
                        if(isset($_SESSION['status']) && $_SESSION != ''){
                            ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Hey!</strong> <?php echo $_SESSION['status']; ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>

                        <?php
                        unset($_SESSION['status']);
                        }
                        ?>

                        <form action="code.php" method="POST" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="" class="form-label">Student Name</label>
                                <input type="text" class="form-control" required name="st_name"
                                pattern="[a-zA-Z\s]+" placeholder="Enter name">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Student Class</label>
                                <input type="text" class="form-control" required name="st_class"
                                    placeholder="Enter Class">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Student Phone Number</label>
                                <input type="text" class="form-control" required name="st_phone"
                                pattern="[0-9]{10}" placeholder="Enter Phone Number">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Student Image</label>
                                <input type="file" class="form-control" required name="st_image">
                            </div>
                            <div class="mb-3">
                                <button name="save" class="btn btn-primary" type="submit">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"> </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>

</body>

</html>