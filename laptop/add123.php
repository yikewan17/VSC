<?php
  require 'functionscust.php';

  //check whether addBtn is clicked
  if (isset ($_POST['addBtn'])){
    
    if (addRecord($_POST)>0){     //addRecord is a function in fucntionscust.php
      echo "<script>
            alert('Successful add new record');
            document.location.href='../../laptop/index123.php';
            </script>;
            ";
    } else {
      echo "Failure to add record";
    }
  }

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Add Record</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <div class="row">
      <div class="col">
        <h3>Add New Record</h3>
      </div>
      <div class="d-grid gap-2 d-md-block">
          <a class="btn btn-primary" href="index123.php" role="button">Home</a>
      </div>
    </div>

    <div class ="container-fluid">
      <div class ="col">
          <form class="row g-3" action="" method="POST">
            <div class="col-md-4">
              <label for="validationDefault01" class="form-label">Name</label>
              <input type="text" class="form-control" name='username' value="Mark" required>
            </div>
            <div class="col-md-4">
              <label for="validationDefault02" class="form-label">Phone Number</label>
              <input type="text" class="form-control" name='userphone' value="Otto" required>
            </div>
            <div class="col-md-6">
              <label for="validationDefault03" class="form-label">Address</label>
              <textarea class="form-control" name='useraddress' rows="4" required></textarea>
            </div>
            <div class="col-md-3">
              <label for="validationDefault04" class="form-label">Login</label>
              <input type="text" class="form-control" name='userlogin' required>
            </div>
            <div class="col-md-3">
              <label for="validationDefault05" class="form-label">Password</label>
              <input type="text" class="form-control" name='userpassword' required>
            </div>
            <div class="mb-3">
              <label for="formFile" class="form-label">Insert Image</label>
              <input class="form-control" type="file" name='userimglink'>
            </div>
            <div class="col-12">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                <label class="form-check-label" for="invalidCheck2">
                  Agree to terms and conditions
                </label>
              </div>
            </div>
            <div class="col-12">
              <button class="btn btn-primary" type="submit" name="addBtn">Submit form</button>
            </div>
          </form>
      </div>
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
