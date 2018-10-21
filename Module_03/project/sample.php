<!DOCTYPE html>
<html>
<body>
  <h1>
    <?php
    //Allow Headers
    header('Access-Control-Allow-Origin: *');
    //$servername = "localhost:3306";
    $servername = "funddestiserver.centralus.cloudapp.azure.com:3306";
    $username = "phpdestiserver";
    $password = "9e7b26E864!!";
    $dbname = "routes";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
     if ($conn->connect_error)
         echo "Error: Unexpected connection error. Please retry the operation.";
       }
     else
      {
         echo "successful completion";

         $sql = "SELECT * FROM locations";
         $result = mysqli_query($conn, $sql);

         if (mysqli_num_rows($result) > 0) {

           //output
           while($row = mysqli_fetch_assoc($result)) {
            echo "id: " . $row["RouteNumber"]. " " . $row["Starting"]. " " . $row ["to"]. " " $row["Ending"]. " " . $row["Hours"]. " " . $row["Miles"]. "<br>";
          }
        }else {
            echo "0 results";
        }
      }
         $conn->close();
    ?>
  </h1>
</body>
</html>
