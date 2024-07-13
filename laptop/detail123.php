<?php
    require "functionscust123.php";
    $custID=$_GET['CustID'];
    $sql="SELECT * FROM `tblcustomer` WHERE `CustID`= $custID";
    $result=query($sql);

    if (isset ($_POST['deleteBtn'])){  
        if (deleteRec($_POST,$custID)>0){    
          echo "<script>
                  alert('Successful delete the record');
                  document.location.href='../../laptop/index123.php';
               </script>;
               "; 
        }
    }
    
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <h4>Customer details</h4>
    <div class="container-fluid text-center">
        <img src="<?php echo "images/".$result[0]['imglink'];?>" class="rounded" alt="...">
    </div>
    <div class="container-fluid">
        <table class="table table-striped border" >       
            <tr>
                <th scope="col" class="border">Customer ID</th>
                <td> <?php echo $result[0]['CustID'];?> </td>
            </tr>
            <tr>
                <th scope="col" class="border">Name</th>
                <td><?php echo $result[0]['CustName'];?></td>
            </tr>
            <tr>
                <th scope="col" class="border">Phone Number</th>
                <td><?php echo $result[0]['PhoneNum'];?></td>
            </tr>
            <tr>
                <th scope="col" class="border">Address</th>
                <td> <?php echo $result[0]['Address'];?> </td>
            </tr>
        </table>
    </div>

    <div class="container">
        <div class ="row">
            <div class ="col">
                <div>
                    <a class="btn btn-primary" href="index123.php" role="button">Home</a>
                </div>
            </div>
            <div class ="col">
                <div>
                    <a class="btn btn-primary" href="update123.php?CustID=<?php echo $result[0]['CustID'];?>" role="button">Update</a>
                </div>
            </div>
            <div class ="col">
                <div>
                <a class="btn btn-primary" href="delete123.php?CustID=<?php echo $result[0]['CustID'];?>" role="button" onclick="return confirm ('Are you sure you want to delete this record?') ;">Delete</a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>