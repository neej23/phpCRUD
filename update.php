<?php include('header.php');?>
<?php include('dbconnect.php');?>

<?php
if(isset($_GET['id'])){
    $id=$_GET['id'];

    $query="SELECT * FROM `cred`.`trip` WHERE `sno` =$id";
    $result=mysqli_query($connection,$query);
    if(!$result){
        die("query Failed".mysqli_error($connection)); 
    }
    else{
        
        $row =mysqli_fetch_assoc($result);    
    }
}else{
    die("ID parameter is not set in the URL");
}

?>

<?php

if(isset($_POST['update_members'])){
    //this id is retrive from url link
    if(isset($_GET['id'])){
        $id=$_GET['id'];
    }
    $nname=$_POST['name'];
    $nage=$_POST['age'];
    $ngender=$_POST['gender'];
    $nemail=$_POST['email'];
    $nphone=$_POST['phone'];
    $ndisc=$_POST['disc'];
    // $query ="UPDATE `trip` SET `name`='$nname',`age`='$nage',`gender`='$ngender',`email`=$nemail,`phone`=$nphone,`Disc`=$ndisc" WHERE `sno`= $id";
    $query ="UPDATE `cred`.`trip` SET `name`='$nname', `age`='$nage', `gender`='$ngender', `email`='$nemail', `phone`='$nphone', `disc`='$ndisc' WHERE `sno`= $id";


    $result=mysqli_query($connection,$query);

    if(!$result){
        die("query Failed".mysqli_error()); 
    }
    else{
        header('location:index.php?update_msg=you have successfully updated the data.');
    }
}

?>
<?php
if(isset($_POST['close_members'])){
    header('location:index.php');
}
?>

<form action="update.php?id=<?php echo $id;?>" method="post">
    <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" value="<?php echo $row ['name']?>">
                </div>
                <div class="form-group">
                    <label for="age">age</label>
                    <input type="text" name="age" class="form-control" value="<?php echo $row ['age']?>">
                </div>
                <div class="form-group">
                    <label for="gender">gender</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="male" value="male"<?php echo ($row['gender'] == 'male') ? 'checked' : ''; ?>>
                            <label class="form-check-label" for="male">Male</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="female" value="female"<?php echo ($row['gender'] == 'female') ? 'checked' : ''; ?>>
                            <label class="form-check-label" for="female">female</label>
                        </div>
                </div>
                <div class="form-group">
                    <label for="email">email</label>
                    <input type="text" name="email" class="form-control" value="<?php echo $row ['email']?>">
                </div>
                <div class="form-group">-
                    <label for="phone">phone</label>
                    <input type="text" name="phone" class="form-control" value="<?php echo $row ['phone']?>">
                </div>
                <div class="form-group">
                    <label for="disc">disc</label>
                    <input type="text" name="disc" class="form-control" value="<?php echo $row ['Disc']?>">
                </div>
                <input type="submit" class="btn btn-success" name="update_members" value="UPDATE" style="margin-top:15px;">
                <input type="submit" class="btn btn-danger" name="close_members" value="CLOSE" style="margin-top:15px;">
                
</form>

<?php include('footer.php');?>
