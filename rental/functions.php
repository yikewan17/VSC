
<?php
function connect(){
    $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "dbrent";
   // Create connection
   return mysqli_connect($servername, $username,$password,$dbname);
   }
   function query($sql){
    // Create connection
    $conn = connect();
    // Check connection
    if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    }
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
    }
    $rental=$rows;
    } else {
    echo "0 results";
    }
    return $rental;
    mysqli_close($conn);
    }
    function addRecord($data) {
        $conn = connect();
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
    
        $username = mysqli_real_escape_string($conn, $data['username']);
        $userphone = mysqli_real_escape_string($conn, $data['userphone']);
        $useraddress = mysqli_real_escape_string($conn, $data['useraddress']);
        $userlogin = mysqli_real_escape_string($conn, $data['userlogin']);
        $userpassword = mysqli_real_escape_string($conn, $data['userpassword']);
        $userimglink = mysqli_real_escape_string($conn, $data['userimglink']);
    
        $sql = "INSERT INTO `tblcustomer` (`CustID`, `CustName`, `PhoneNum`, `Address`, `CustLogin`, `Password`, `imglink`)
                VALUES (null, '$username', '$userphone', '$useraddress', '$userlogin', '$userpassword', '$userimglink')";
        
        if (mysqli_query($conn, $sql)) {
            echo "Record added successfully";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    
        mysqli_close($conn);
    }
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbrent";

// 1. Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// 2. Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

// 3. Execute the SQL statement
$sql = "SELECT * FROM tblcustomer";
$result = mysqli_query($conn, $sql);

// 4. Collect all retrieved records and store it inside array ($p)
$rows = [];
$p = []; // Initialize $p as an empty array
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    $p = $rows;
} else {
    echo "0 results";
}

// 5. Close the database connection
mysqli_close($conn);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Urban Luxe Rental</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <h1>Urban Luxe Rental</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">CustID</th>
                <th scope="col">CustName</th>
                <th scope="col">PhoneNum</th>
                <th scope="col">Address</th>
                <th scope="col">CustLogin</th>
                <th scope="col">Password</th>
                <th scope="col">imglink</th>
            </tr>
        </thead>
        <tbody>
        <?php
        // 1. Create loop to read repetitive records in array
        $i = 1;
        if (!empty($p)) {
            foreach ($p as $pr) {
                // 2. Then insert variable $pr in table rows & columns to display records
                ?>
                <tr>
                    <td><?php echo $pr['CustID']; ?></td>
                    <td><?php echo $pr['CustName']; ?></td>
                    <td><?php echo $pr['PhoneNum']; ?></td>
                    <td><?php echo $pr['Address']; ?></td>
                    <td><?php echo $pr['CustLogin']; ?></td>
                    <td><?php echo $pr['Password']; ?></td>
                    <td><?php echo $pr['imglink']; ?></td>
                </tr>
                <?php
            }
        } else {
            echo "<tr><td colspan='7'>No results found</td></tr>";
        }
        ?>