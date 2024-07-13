<?php
  require 'functionscust123.php';
  $custID=$_GET['CustID'];
  $sql="SELECT * FROM `tblcustomer` WHERE `CustID`= $custID";
  $custRec=query($sql);

  //check whether updateBtn is clicked
  if (isset ($_POST['updateBtn'])){  
    if (updateRecord($_POST)>0){    
      echo "<script>
              alert('Successful update the record');
              document.location.href='../../laptop/index123.php';
           </script>;
           "; 
    } else {
      echo "Failure to update record";
    }
  }

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Update Record</title>
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
        <h4>Update Customer Record</h4>
      </div>
    </div>

    <div class ="container-fluid">
      <div class ="col">
          <form class="row g-3" action="" method="POST">
            <input type="hidden" class="form-control" name='userID' value="<?php echo $custRec[0]['CustID'];?>">
            <div class="col-md-4">
              <label for="validationDefault01" class="form-label">Name</label>
              <input type="text" class="form-control" name='username' value="<?php echo $custRec[0]['CustName'];?>">
            </div>
            <div class="col-md-4">
              <label for="validationDefault02" class="form-label">Phone Number</label>
              <input type="text" class="form-control" name='userphone' value="<?php echo $custRec[0]['PhoneNum'];?>">
            </div>
            <div class="col-md-6">
              <label for="validationDefault03" class="form-label">Address</label>
              <textarea class="form-control" name='useraddress' rows="4"><?php echo $custRec[0]['Address'];?></textarea>
            </div>

            <div class="mb-3">
              <img src="images/<?php echo $custRec[0]['imglink'];?>" class="rounded" alt="...">
              <br>
              <label for="img">Image File: </label>
              <input class="form-control" type="text" name='userimglink' id="img"  maxlength="4" size="4" value="<?php echo $custRec[0]['imglink'];?>">
              
            </div>

            <div class="col-12">
              <a class="btn btn-primary" href="index123.php" role="button">Home</a>
              <button class="btn btn-primary" type="submit" name="updateBtn">Update</button>
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
