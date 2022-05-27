<?php
include("connection.php");
    $cmob=$_POST['cmob'];
    $name = $_POST['name'];
    $mobile = $_POST['mob'];
    $pass = $_POST['pass'];
    $cpass = $_POST['cpass'];
    $email = $_POST['email'];
    $image = $_FILES['image']['name'];
    $tmp_name = $_FILES['image']['tmp_name'];
    
$check1 = mysqli_query($connect, "select * from user where mobile='$cmob'");
if(mysqli_num_rows($check1)>0)
{
    if($cpass==$pass)
    {
       $check1 = mysqli_query($connect,"UPDATE user SET name='$name' where mobile='$cmob'");
       $check2 = mysqli_query($connect,"UPDATE user SET password='$pass' where mobile='$cmob'");
       $check3 = mysqli_query($connect,"UPDATE user SET email='$email' where mobile='$cmob'");
       $check4 = mysqli_query($connect,"UPDATE user SET photo='$image' where mobile='$cmob'");
       $check = mysqli_query($connect,"UPDATE user SET mobile='$mobile' where mobile='$cmob'");
      
       
       echo '<script>
      alert("Record updated successfully!!!");
      window.location = "../routes/admin.php";
      </script>';
    }
    else{
        echo '<script>
        alert("Password doesnt match");
        window.location = "../routes/updateInfo.php";
    </script>';
    }
}
 else{
  //echo "Error deleting record: " . mysqli_error($connect);
            echo '<script>
            alert("Invalid credentials!The current mobile no doesnot exist!!Cant update info!!");
            window.location = "../routes/updateInfo.php";
            </script>';
}

//mysqli_close($connect);
?>
