<?php
    function connect(){
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "dbrent";
            
            // Create connection
            return mysqli_connect($servername, $username, $password,$dbname);   
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
            $laptop=$rows;
        } else {
        echo "0 results";
        }
        return $laptop;
        mysqli_close($conn);
    }
    
function addRecord($data){
    $conn=connect();
    $username=$data['username'];
    $userphone=$data['userphone'];
    $useraddress=$data['useraddress'];
    $userlogin=$data['userlogin'];
    $userpassword=$data['userpassword'];
    $userimglink=$data['userimglink'];

    $sql="INSERT INTO `tblcustomer`(`CustID`, `CustName`, `PhoneNum`, `Address`, `CustLogin`, `Password`, `imglink`) 
          VALUES (null,'$username','$userphone','$useraddress','$userlogin','$userpassword','$userimglink') ";
    mysqli_query($conn,$sql);
}

function search($data){
    $conn=connect();
    $searchkey=$data['search'];
    $radio1=$data[''];
   
}

function searchRec($searchkey,$search){
    $conn=connect();
    $sql="SELECT * FROM `tblcustomer` WHERE $search LIKE'%$searchkey%'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        return $rows;
        mysqli_close($conn);
     }
}

function updateRecord($data){

    $conn=connect();
    $custID= $data['userID']; 
    $username=$data['username'];
    $userphone=$data['userphone'];
    $useraddress=$data['useraddress'];
    $userimglink=$data['userimglink'];

    $sql="UPDATE `tblcustomer` SET 
         `CustName` = '$username', 
         `PhoneNum` = '$userphone', 
         `Address`= '$useraddress', 
         `imglink`= '$userimglink' 
         WHERE `CustID` = $custID" ; 

    mysqli_query($conn,$sql);
    return mysqli_affected_rows($conn);

}

function deleteRec($customerID){  
    $conn=connect();
    $custID= $customerID;
    $sql= "DELETE FROM `tblcustomer` WHERE `CustID`= $custID";
    mysqli_query($conn,$sql) or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}


?>
