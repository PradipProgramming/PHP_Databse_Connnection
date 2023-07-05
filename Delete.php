<html>
    <head>
        <title>Delete page</title>
    </head>
    <body>
        <center>
            <h1>Delete Page</h1>
        <form method="POST" action="Delete.php">
            <label for="id">Enter ID to delete:</label>
            <input type="text" name="l_id" id="l_id"><br/><br />
            <input type="submit" name="delete" value="Delete">
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
    if (isset($_POST['delete'])) {
    // Get the ID of the data to be deleted
        $l_id = $_POST['l_id'];

    // Construct the delete query
         $query = "DELETE FROM Student_data WHERE l_id = $l_id";

    // Execute the delete query
        $result = mysqli_query($con, $query);

    // Check if the query executed successfully
        if ($result) {
           echo "Data deleted successfully.";
            sleep(2);
        } else {
        // Handle the error if the query fails
           echo "Error: " . mysqli_error($connection);
        }
    }
    //mysqli_close($con);
    $con->close();
    header("Location: Display.php");
    exit();
?>

