<html>
    <head>
        <title>Update page</title>
    </head>
    <body>
        <center>
            <h1>Update Page</h1>
        <form method="POST" action="Contact_update.php">
            <label for="id">Enter the ID:</label>
            <input type="text" name="l_Id" id="l_Id"><br/><br />
            <input type="submit" name="update" value="update">
        </form>
        </center>
    </body>
</html>




<?php 
 $host="localhost";
 $user="root";
 $password="";
 $dbname="university";
 $con=mysqli_connect($host,$user,$password,$dbname);
 if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}
//$contact=$_POST['l_contact'];
$sql =("SELECT * FROM form where l_Id='".$_POST['l_Id']."'");
$result = $con->query($sql);

if ($result->num_rows > 0) {
     $row = $result->fetch_assoc() 
?>
<center><html>
  <head>
    <title>Update page</title>
  </head>
  <body>
  <section>
    <div>
      <form action="update_record.php" method="Post">

        ID:<input type="text" id="l_Id" name="l_Id" value="<?php echo $_POST['l_Id']; ?>"><br/><br/>

        Name: <input type="text" id="l_name" name="l_name" value="<?php echo $row['l_name']; ?>" placeholder="Enter your name..." requird> <br/><br/>

        Conatct no.:<input type="text" id="l_contact" name="l_contact" value="<?php echo $row['l_contact']; ?>" placeholder="Enter your concat no..." requird><br/><br/>

        Address: <input type="text" id="l_address" name="l_address" value="<?php echo $row['l_address']; ?>" placeholder="Enter your address..." requird><br/><br/>

       
        Email: <input type="email" id="l_email" name="l_email" value="<?php echo $row['l_email']; ?>"  placeholder="Enter email address..." requird><br/><br/>
        
        Password: <input type="Phone" id="l_password" name="l_password" value="<?php echo $row['l_password']; ?>" placeholder="Enter your password..." requird><br/><br/>
        
        Skill: <input type="text" id="l_skill" name="l_skill" value="<?php echo $row['l_skill']; ?>" placeholder="Enter your skill..." requird><br/><br/>
        
        City: <input rows="8" id="l_city" name="l_city" value="<?php echo $row['l_city']; ?>" placeholder="Enter your city..." requird></input><br/><br/>

        Gender: <input rows="8" id="l_gender" name="l_gender" value="<?php echo $row['l_gender']; ?>" placeholder="Enter your gender..." requird></input><br/><br/>
       
        <br>
        <button type="submit"class="hero-btn red-btn">Update</button>
        </form>
    </div>
  </section>
</section>
  </body>
 </html></center>
 <?php }
?> 




<?php 
$host="localhost";
$user="root";
$password="";
$dbname="university";
$con=mysqli_connect($host,$user,$password,$dbname);

$id=$_POST['l_Id'];
$name=$_POST['l_name'];
$contact=$_POST['l_contact'];
$address=$_POST['l_address'];
$email=$_POST['l_email'];
$password=$_POST['l_password'];
$skill=$_POST['l_skill'];
$city=$_POST['l_city'];
$gender=$_POST['l_gender'];

$query="UPDATE `form` SET `l_Id`=$id,`l_name`='$name',`l_contact`='$contact',`l_address`='$address',
`l_email`='$email',`l_password`='$password',`l_skill`='$skill',`l_city`='$city',`l_gender`='$gender' WHERE `l_Id`=$id";

if (mysqli_query($con, $query)) {
   echo "Record updated successfully.";
   include_once "Display_form.php";
} else {
   echo "Error updating record: " . mysqli_error($con);
}

mysqli_close($con);
?> 
