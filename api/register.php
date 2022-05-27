<?php
    include("connection.php");

    $name = $_POST['name'];
    $mobile = $_POST['mob'];
    $pass = $_POST['pass'];
    $cpass = $_POST['cpass'];
    $email = $_POST['email'];
    $image = $_FILES['image']['name'];
    $tmp_name = $_FILES['image']['tmp_name'];
    $role = $_POST['role'];

    if($cpass==$pass){
        move_uploaded_file($tmp_name,"../uploads/$image");
        $insert = mysqli_query($connect, "INSERT INTO user (name, mobile, password, email, photo, status, votes, role) values('$name', '$mobile', '$pass', '$email', '$image', 0, 0, '$role') ");
        if($insert){
            echo '<script>
                   
                    
                    window.location = "../routes/success.php";
                </script>';
        }
        else{
            echo '<script>
                    alert("Some error occured");
                    window.location = "../routes/register.php";
                </script>';
        }
    }
    else{
        echo '<script>
                    alert("Password doesnt match");
                    window.location = "../routes/register.php";
                </script>';
    }
    
    
?>