<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
<?php session_start(); ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP Image CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header container">
                        <div class="row">
                            <div class="col-md-10"><h5>All Data Fetching</h5></div>
                            <div class="col-md-2"><a href="create.php" class="col btn btn-primary">Insert Details</a></div>
                        </div>
                    </div>
                    <div class="card-body">

                        <?php
                            $conn = mysqli_connect("localhost", "root", "", "images");
                            
                            $sql = "SELECT * FROM `img_crud`";
                            $res = mysqli_query($conn, $sql);
                        ?>
                       <table class="table" id="myTable">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>NAME</th>
                                <th>CLASS</th>
                                <th>Phone No.</th>
                                <th>Image</th>
                                <th>EDIT</th>
                                <th>DELETE</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                if(mysqli_num_rows($res) > 0){
                                    foreach($res as $row){
                                        ?>
                                        <tr>
                                            <td><?php echo $row['id']; ?></td>
                                            <td><?php echo $row['st_name']; ?></td>
                                            <td><?php echo $row['st_class']; ?></td>
                                            <td><?php echo $row['st_phone']; ?></td>
                                            <td>
                                               <img src="<?php echo "upload/" . $row['st_image']; ?>" width="100px" alt="image"> 
                                            </td>
                                            <td>
                                                <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-info">EDIT</a>
                                            </td>
                                            <td>
                                                <form action="code.php" method="POST">
                                                    <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                                                    <input type="hidden" name="delete_img" value="<?php echo $row['st_image']; ?>">
                                                    <button type="submit" name="delete_st_img" class="btn btn-danger">DELETE</button>
                                                </form>
                                            </td>

                                        </tr>
                                        <?php
                                    }
                                }else{
                                    ?>
                                    <tr>
                                        <td>No records available</td>
                                    </tr>
                            <?php
                                }
                            ?>
                        </tbody>
                       </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready( function () {
            $('#myTable').DataTable();
        } );
    </script>
    
    <?php
    if(isset($_SESSION['status']) && $_SESSION['status'] != ''){
        ?>
        <script>
             swal({
                    title: "<?php echo $_SESSION['status'] ?>",
                    icon: "<?php echo $_SESSION['status_code'] ?>",
                    button: "DONE!",
                });
        </script>
        <?php
        unset($_SESSION['status']);
    }
    ?>
  
  </body>
</html>