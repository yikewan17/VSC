<?php
  require 'functionscust.php';
  $sql = "SELECT * FROM tblrent";
  $p=query($sql);
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <h1>Rental Listing</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">PropID</th>
                <th scope="col">PropType</th>
                <th scope="col">Location</th>
                <th scope="col">Size</th>
                <th scope="col">Price</th>
                <th scope="col">AvailStat</th>
                <th scope="col">ContactNum</th>
                <th scope="col">imglink</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                //1. Create loop to read repetitive records in array
                $i=1;
                foreach($p as $pr):;
                //2. Then insert variable $pr in table rows and columns to display records  
              ?>
            <tr>
                <td><?php echo $i++ ?></td>
                <td><?php echo $pr['PropID']; ?></td>
                <td><?php echo $pr['PropType']; ?></td>
                <td><?php echo $pr['Location']; ?></td>
                <td><?php echo $pr['Size']; ?></td>
                <td><?php echo $pr['Price']; ?></td>
                <td><?php echo $pr['AvailStat']; ?></td>
                <td><?php echo $pr['ContactNum']; ?></td>
                <td><?php echo $pr['imglink']; ?></td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>