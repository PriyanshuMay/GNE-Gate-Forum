<?php session_start(); ?>
<?php 
    if(!isset($_SESSION["loggedin"])){
    header('location:index.php');}
?>
<?php
include("essentials/config.php");

        $username = $_SESSION["loggedin"];
        $id = $_POST['id'];
        
        $sql = "INSERT INTO question (username,id) VALUES ('$username','$id')";

$q = "select * from question where username = '$username' && id = '$id' ";

$result = mysqli_query($con,$q);
$num = mysqli_num_rows($result);

if ($num == 1) {

    $sql=mysqli_query($con,"DELETE FROM question WHERE id='$id'");
   echo "<script>
    alert('Question successfully deleted');
document.location='delQuestion.php';
</script>";
    
} else {
    echo "<script>
    alert('Some error occured! Please try again');
    document.location='delQuestion.php';
</script>";  
}

?>