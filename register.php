<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "register";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname); //connection string

//$user = $_POST["username"];
//$pass = $_POST["password"];
//$email =$_POST['email'];
//$phone = $_POST['phone number'];


// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql ="SELECT * FROM register";
$result = $conn->query($sql);
?>

<html>
      <body>
        <table border="1">
          <tr>
              <th>Username</th>
              <th>Email</th>
              <th>Phone No</th>
              <th>Password</th>
          </tr>
<?php
  if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) 
  {
?>
   
        <tr>
              <td>
                <?php echo $row["Username"];
                ?>
              </td>
              <td>
                <?php echo $row["Email"];
                ?>
              </td>
              <td>
                <?php echo $row["Phoneno"];
                ?>
              </td>
              <td>
                <?php echo $row["Pass"];
                ?>
              </td>
        </tr>
  
 <?php               
    } //while closing
 ?>

        </table>
    </body>
  </html>
  
<?php
}//if condition closing
 else 
 {
      echo "0 results";
  }
$conn->close();
?>