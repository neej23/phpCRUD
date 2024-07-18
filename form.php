<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form for Manali Trek</title>
    <link rel="stylesheet" href="style.css">    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
<h1 id="main_title">Manali Trek Entry Form</h1>
<div class="container">     
<?php
  if(isset($_GET['insert_msg'])){
    echo "<h6 style='color:green;'>".$_GET['insert_msg']."</h6>";
  } 
?>
<form action="insert2.php" method="post">
    <div class="modal-header">
        <h2 class="modal-title" id="exampleModalLabel">Add Details</h2>
    </div>
   
        <div class="modal-body">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control"  required>
        </div>
        <div class="modal-body">
            <div class="form-group">
                <label for="name">age</label>
                <input type="text" name="age" class="form-control"  required>
        </div>
        <div class="form-group">
              <label for="gender">gender</label>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="gender" id="male" value="male">
                  <label class="form-check-label" for="male">Male</label>
                </div>
                <div class="form-check form-check-inline">
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
        <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal" style="margin-top: 15px;">Reset</button>
        <!-- by clicking the below button the insert.php comes in action -->
        <input type="submit" class="btn btn-success" name="add_members" value="Submit" style="margin-top: 15px;">
</form>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
