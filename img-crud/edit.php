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
                    <div class="card-header bg-warning">
                        <h5>Edit data and image in PHP</h5>
                    </div>
                    <div class="card-body">
                        <?php
                        $conn = mysqli_connect("localhost", "root", "", "images");
                        
                        $id = $_GET['id'];
                        $sql = "SELECT * FROM `img_crud` WHERE id='$id'";
                        $res = mysqli_query($conn, $sql);

                        if(mysqli_num_rows($res) > 0){
                            foreach($res as $row){
                                ?>
                            <form action="code.php" method="POST" enctype="multipart/form-data">
                                
                                <input type="hidden" name="st_id" value="<?php echo $row['id']; ?>" >
                                <div class="mb-3">
                                    <label for="" class="form-label">Student Name</label>
                                    <input type="text" class="form-control" value="<?php echo $row['st_name']; ?>" required name="st_name"
                                        placeholder="Enter name">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Student Class</label>
                                    <input type="text" class="form-control" value="<?php echo $row['st_class']; ?>" required name="st_class"
                                        placeholder="Enter Class">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Student Phone Number</label>
                                    <input type="text" class="form-control" value="<?php echo $row['st_phone']; ?>" required name="st_phone"
                                        placeholder="Enter Phone Number">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Student Image</label>
                                    <input type="file" class="form-control" name="st_image">
                                    <input type="hidden" name="st_image_old" value="<?php echo $row['st_image']; ?>">
                                </div>
                                <img src="<?php echo "upload/". $row['st_image']; ?>" width="100px">
                                <div class="mb-3">
                                    <button name="update" class="btn btn-primary mt-3" type="submit">Update</button>
                                </div>
                            </form>
                                <?php                                
                            }
                        }else{
                                echo "NO Record Found.";
                            }
                        ?>
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