<?php
require 'functionscust.php';
$sql = "SELECT * FROM tblcustomer";
$p=query($sql);
?>
<!doctype html>
<html lang="en">
  <head>
    <div class="row g-2">
        <div class="col"></div>
        </div>        
    <div class="row g-2">
        <div class="col"><h3>Navigation Buttons</h3></div>
        <div class="d-grid gap-2 d-md-block">        
          </div>
        </div>        
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <a class="btn btn-primary" href="add.php" role="button">Add</a>
    <a class="btn btn-primary" href="delete.php" role="button">Delete</a>
    <a class="btn btn-primary" href="update.php" role="button">Update</a>
    <a class="btn btn-primary" href="search.php" role="button">Search</a>
</div>     
    <h1>Hello, world!</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>