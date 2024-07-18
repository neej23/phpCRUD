<?php
include 'dbconnect.php';
if(isset($_POST['add_members'])){

    $name=$_POST['name'];
    $age=$_POST['age'];
    $gender=$_POST['gender'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $disc=$_POST['disc'];
    
    //Checking validation 
    if(empty($name)|| empty($age)||empty($gender)||empty($phone)||empty($disc)||empty($phone)){
        header('location:index.php?message=You need to fill all details!'); 
    }
    else{
        $query="insert into `cred`.`trip`(`name`,`age`,`gender`,`email`,`phone`,`disc`) values ('$name','$age','$gender','$email',
        '$phone','$disc')";
        
        $result = mysqli_query($connection,$query);
        
        if(!$result){
            die("Query Failed".mysqli_errror());
        }
        else{
            //success message desplay 
            header('location:index.php?insert_msg=You data has been added successfully');
        }

    }
}
?>
