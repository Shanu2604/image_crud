<?php
session_start();

$conn = mysqli_connect("localhost", "root", "", "images");

if(isset($_POST['save'])){
    $name = $_POST['st_name'];
    $class = $_POST['st_class'];
    $phone = $_POST['st_phone'];
    $image = $_FILES['st_image']['name'];

    $allowed_ext = array('gif', 'jpg', 'png', 'jpeg');
    $filename = $_FILES['st_image']['name'];
    $file_ext = pathinfo($filename, PATHINFO_EXTENSION);
    if(!in_array($file_ext, $allowed_ext)){
        $_SESSION['status'] = "You are only allowed with jpg, png, gif, jpeg";
        header('Location: create.php');
    }else{

        if(file_exists("upload/". $_FILES['st_image']['name'])){
            $hasfile = $_FILES['st_image']['name'];
            $_SESSION['status'] = "image already exists " . $hasfile;
            header('Location: create.php');
        }else{

            $qry = "INSERT INTO `img_crud`(`st_name`, `st_class`, `st_phone`, `st_image`) VALUES ('$name','$class','$phone','$image')";
            $res = mysqli_query($conn, $qry);

            if($res){
                move_uploaded_file($_FILES['st_image']['tmp_name'], "upload/".$image);
                $_SESSION['status'] = "Data Stored Successfully";
                $_SESSION['status_code'] = "success";
                header('Location: create.php');
            }
            else{
                $_SESSION['status'] = "image not stored...";
                $_SESSION['status_code'] = "error";
                header('Location: create.php'); 
            }
        }
    }
}

//for updating
if(isset($_POST['update'])){
    $st_id = $_POST['st_id'];
    $name = $_POST['st_name'];
    $class = $_POST['st_class'];
    $phone = $_POST['st_phone'];

    $new_img = $_FILES['st_image']['name'];
    $old_img = $_POST['st_image_old'];

    if($new_img !=''){
        $update_filename = $_FILES['st_image']['name'];
    }else{
        $update_filename = $_POST['st_image_old'];
    }

    if($_FILES['st_image']['name'] != ''){
        if(file_exists("upload/". $_FILES['st_image']['name'])){
            $hasfile = $_FILES['st_image']['name'];
            $_SESSION['status'] = "image already exists " . $hasfile;
            header('Location: index.php');
        }
    }else{
        $sql = "UPDATE `img_crud` SET `st_name`='$name',`st_class`='$class',`st_phone`='$phone',`st_image`='$update_filename' WHERE `id`= $st_id";
        $res = mysqli_query($conn, $sql);

        if($res){

            if($_FILES['st_image']['name'] != ''){
                move_uploaded_file($_FILES['st_image']['tmp_name'], "upload/" . $_FILES['st_image']['name']);
                unlink("upload/". $old_img);
            }
            $_SESSION['status'] = "Data Updated Successfully" ;
            $_SESSION['status_code'] = "success";
            header('Location: index.php');
        }else{
            $_SESSION['status'] = "data not updated" ;
            $_SESSION['status_code'] = "error";
            header('Location: index.php');
        }
    }
}


//deleting
if(isset($_POST['delete_st_img'])){
    $id = $_POST['delete_id'];
    $st_img = $_POST['delete_img'];

    $sql = "DELETE FROM `img_crud` WHERE id='$id'";
    $res = mysqli_query($conn, $sql);

    if($res){
        unlink("upload/". $st_img);
        $_SESSION['status'] = "Data Deleted Successfully" ;
        $_SESSION['status_code'] = "success";
        header('Location: index.php');
    }else{
        $_SESSION['status'] = "data not deleted" ;
        $_SESSION['status_code'] = "error";
        header('Location: index.php');
    }
}

?>