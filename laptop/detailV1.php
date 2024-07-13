<?php
  require 'functionscust.php';
  $custID=$_GET['custID'];

  $sql = "SELECT * FROM `tblcustomer` WHERE `custID`= $custID";
  $result=query($sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Detail Record</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
</head>

<body>
    <div class="container-fluid">
        <H4>Details Customer Record</H4>
    </div>

    <div class="container-fluid text-center">
        <img src="images/<?php echo $result[0]['imglink'] ;?>" class="rounded float-start" alt="...">
    </div>

    <div class="container-fluid">
        <table class="table table-striped border">
            <tr>
                <th scope="col" class="border">Customer ID</th>
                <td><?php echo $result[0]['custID'] ; ?></td>
            </tr>
            <tr>
                <th scope="col" class="border">Name</th>
                <td><?php echo $result[0]['custName'] ; ?></td>
            </tr>
            <tr>
                <th scope="col" class="border">Phone Number</th>
                <td><?php echo $result[0]['custPhoneNo'] ; ?>7</td>
            </tr>
            <tr>
                <th scope="col" class="border">Address</th>
                <td> <?php echo $result[0]['custAddress'] ; ?></td>
            </tr>
        </table>
    </div>
    <br>
    <div class="container">
        <div class="row">
            <div class="col">
                <div>
                    <a class="btn btn-primary" href="index.php" role="button">Home</a>
                </div>
            </div>
            <div class="col">
                <div>
                    <a class="btn btn-primary" href="update.php?custID=<?php echo $result[0]['custID'];?>"
                        role="button">Update</a>
                </div>
            </div>
            <div class="col">
                <div>
                    <a class="btn btn-primary" href="delete.php" role="button">Delete</a>
                </div>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>