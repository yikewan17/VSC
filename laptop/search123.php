<?php
    require "functionscust123.php";
    if (isset ($_POST['searchBtn'])){
       $searchkey=$_POST["searchkey"];          //from input box
       $search = test_input($_POST["search"]);  //from radio button
       $result=searchRec($searchkey,$search);   //add this function to search record   
    }
    //this function is to test the input string entered by users  
    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Search Record</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <div class ="container-fluid">
      <div class="row">
        <div class="col">
          <h3>Search Record</h3>
        </div>
      </div>
    </div>
    <br>

    <div class="container-fluid">
      <form class="row g-3" action="" method="POST">
        <div class ="row">
          <div class = "col">
            <div class="input-group mb-3">     
              <span class="input-group-text" id="basic-addon1">Enter keyword</span>
              <input type="text" class="form-control" placeholder="Type your search keyword here" 
                name='searchkey' aria-label="Username" aria-describedby="basic-addon1" 
                autocomplete="off" autofocus>
            </div>
            <div>
              <h5>Choose search option:</h5>
            </div>
          </div>
        </div>

        <div class ="rows">
          <div class="col">
            <div class="form-check">
              <!--assign value to each radio btn exactly similar what inside the database table -->
              <input class="form-check-input" type="radio" name="search" value="CustID"  <?php if(isset($searchby) && $searchby=="CustID") echo "checked";?>>              
              <label class="form-check-label" for="CustID">
                Customer ID
              </label>
            </div>
            <div class="form-check">
            <input class="form-check-input" type="radio" name="search" value="CustName" <?php if(isset($searchby) && $searchby=="CustName") echo "checked";?>>
              <label class="form-check-label" for="CustName">
                Customer Name
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="search" value="PhoneNum"  <?php if(isset($searchby) && $searchby=="PhoneNum") echo "checked";?>>
              <label class="form-check-label" for="PhoneNum">
                Customer Phone
              </label>
            </div>
          </div>
        </div>

        <div class ="rows">
          <div class="col">
            <div class="col-12">
              <button class="btn btn-primary" type="submit" name="searchBtn">Search</button>
            </div>
          </div>
        </div>
        
      </form>
    </div>
      <br>
      <div class = "container-fluid">
        <div class ="row">
          <div class="d-grid gap-2 d-md-block">
            <div>
              <a class="btn btn-primary" href="index123.php" role="button">Home</a>
            </div>  
          </div>
        </div>
      </div>
  <!-- add this code to check input from users via text box and radio button -->
  <br>

  <div class ="container-fluid">
    <?php if (isset($_POST['searchBtn'])){     //to print number of record found
      $numarry=count($result);
      echo "<h5>". "Number of records found: ".$numarry ."</h5>"; 
    }?>
                    
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Customer ID</th>
            <th scope="col">Customer Name</th>
            <th scope="col">Customer Phone</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
          <?php error_reporting(E_ERROR | E_PARSE);
                $i=1; 
                foreach ($result as $cust):;?>
          <tr>
            <th scope="row"><?php echo $i++;?></th>
            <td> <?php echo $cust['CustID'];?> </td>
            <td> <?php echo $cust['CustName'];?> </td>
            <td> <?php echo $cust['PhoneNum'];?> </td>
            <td> <a class="btn btn-primary" href="detail123.php?CustID=<?php echo $cust['CustID'];?>" role="button">Details</a> </td>
          </tr>
          <?php endforeach;?>
          
          <!-- if the search result return empty record -->
          <?php if(empty($result)):?>
            <tr>
              <td colspan="4" class="text-center">
                <H4>Record not found!!</H4> 
              </td>
            </tr>
          <?php endif; ?>
        </tbody>
    </table>
  </div>

      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>