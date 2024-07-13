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

        $sql = "INSERT INTO `tblcustomer`(`CustID`, `CustName`, `PhoneNum`, `Address`, `CustLogin`, `Password`, `imglink`) 
                VALUES (null,'$username','$userphone','$useraddress','$userlogin','$userpassword','$userimglink')";
        mysqli_query($conn,$sql);
        echo mysqli_error($conn);
        //notification to user that new record is successfully added
        return mysqli_affected_rows($conn);
    }

    function searchRec($searchkey,$search){
        $conn=connect();
        $sql="SELECT * FROM `tblcustomer` WHERE $search LIKE'%$searchkey%'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) { //4. Select match records
            $rows[] = $row;
            }
            return $rows; //5. Return back the result to the searchRec function
            mysqli_close($conn);
            }
    }

    function updateRecord ($data,$custID) {
        $conn=connect();
        $username=$data['username'];
        $userphone=$data['userphone'];
        $useraddress=$data['useraddress'];
        $userimglink=$data['userimglink'];

        $sql="UPDATE `tblcustomer` SET       
         `custName` = '$username', 
         `custPhoneNo` = '$userphone', 
         `custAddress`= '$useraddress', 
         `imglink`= '$userimglink' 
         WHERE `custID` = $custID" ;  // this is the query for update
        
        mysqli_query($conn,$sql);   //run the query
        return mysqli_affected_rows($conn);  //this is the code for notification that you have update
    }


?>
