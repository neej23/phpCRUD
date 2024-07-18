<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trip</title>
    <link rel="stylesheet" href="style.css">    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <h1 id="main_title">Manali trek participant details</h1>
    <div class="container">
<?php include('dbconnect.php');?>
<div class="box1">
    <h2>All trip member</h2>
    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Add Member</button>

</div>
<table class="table tabel-hover tabel-bordered table-striped">
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>  
            <th>age</th>
            <th>gender</th>
            <th>email</th>
            <th>phone</th>
            <th>Disc</th>
            <th>date</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $query="SELECT * FROM `cred`.`trip`";
        $result=mysqli_query($connection,$query);
        if(!$result){
            die("query Failed".mysqli_error()); 
        }
        else{
            
            while($row =mysqli_fetch_assoc($result)){
                ?>
            <tr>
                <td><?php echo $row['sno'];?></td>
                <td><?php echo $row['name'];?></td>
                <td><?php echo $row['age'];?></td>
                <td><?php echo $row['gender'];?></td>
                <td><?php echo $row['email'];?></td>
                <td><?php echo $row['phone'];?></td>
                <td><?php echo $row['Disc'];?></td>
                <td><?php echo $row['date'];?></td>
                <td><a href="update.php?id=<?php echo $row['sno'];?>" class="btn btn-success">Update</a></td>
                <td><a href="delete.php?id=<?php echo $row['sno'];?>" class="btn btn-danger">Delete</a></td>
            </tr>

                <?php
            }
        }
        ?>
    </tbody>
</table>

<?php
 if(isset($_GET['message'])){
    echo "<h6 style='color: red;'>".$_GET['message']."</h6>";
}
 
?>
<?php
  if(isset($_GET['insert_msg'])){
    echo "<h6 style='color:green;'>".$_GET['insert_msg']."</h6>";
  } 
?>
<?php
  if(isset($_GET['update_msg'])){
    echo "<h6 style='color:green;'>".$_GET['update_msg']."</h6>";
  } 
?>
<?php
  if(isset($_GET['delete_msg'])){
    echo "<h6 style='color: red;'>".$_GET['delete_msg']."</h6>";
  }
?>
<form action="insert.php" method="post">
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Trip Members</h5>
      </div>
      <div class="modal-body">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="age">age</label>
                <input type="text" name="age" class="form-control">
            </div>
            <div class="form-group">
              <label for="gender">gender</label>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="gender" id="male" value="male">
                  <label class="form-check-label" for="male">Male</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                  <label class="form-check-label" for="female">female</label>
                </div>
            </div>
            <div class="form-group">
                <label for="email">email</label>
                <input type="text" name="email" class="form-control">
            </div>
            <div class="form-group">
                <label for="phone">phone</label>
                <input type="text" name="phone" class="form-control">
            </div>
            <div class="form-group">
                <label for="disc">disc</label>
                <input type="text" name="disc" class="form-control">
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <!-- by clicking the below button the insert.php comes in action -->
        <input type="submit" class="btn btn-success" name="add_members" value="Add">
      </div>
    </div>
  </div>
</div>
</form>
<?php include('footer.php');?>