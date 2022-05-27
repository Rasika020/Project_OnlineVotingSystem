<?php
include("connection.php");
$mobile = $_POST['mob'];
$pass = $_POST['pass'];
$check1 = mysqli_query($connect, "select * from user where mobile='$mobile' and password='$pass'");
if(mysqli_num_rows($check1)>0)
{
// sql to delete a record
$check = mysqli_query($connect,"DELETE FROM user WHERE mobile='$mobile'");

  echo '<script>
  alert("Record deleted successfully!!!");
  window.location = "../routes/admin.php";
</script>';
}
 else{
  //echo "Error deleting record: " . mysqli_error($connect);
  echo '<script>
                alert("Invalid credentials!");
                window.location = "../routes/delete.php";
            </script>';
}

//mysqli_close($connect);
?>