<?php include 'dbconnect.php';?>
<?php
if(isset($_GET['id'])){
    $id=$_GET['id'];



    $query ="DELETE FROM `cred`.`trip` WHERE `sno` ='$id' "; 

    $result =mysqli_query($connection,$query);

    if(!$result){
        die("Query Failed".mysqli_error());
    }
    else{
        header('location:index.php?delete_msg=you have deleted the record.');
    }
}
?>