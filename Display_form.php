<?php 
    $host="localhost";
    $user="root";
    $password="";
    $dbname="university";
    $con=mysqli_connect($host,$user,$password,$dbname);
    //$conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    $sql = "SELECT * FROM form";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        echo "<center>";
        echo "<h1>DISPLAY DATA</h1><br>";
        echo "<form>";
        echo "<table style='border-collapse: collapse;'>";
        echo "<tr><th style='border: 1px solid black; padding: 10px; font-weight: bold;'>ID: </th>
                 <th style='border: 1px solid black; padding: 10px; font-weight: bold;'>Name: </th>
                  <th style='border: 1px solid black; padding: 10px; font-weight: bold;'>Contact: </th>
                  <th style='border: 1px solid black; padding: 10px; font-weight: bold;'>Address: </th>
                  <th style='border: 1px solid black; padding: 10px; font-weight: bold;'>Email: </th>
                  <th style='border: 1px solid black; padding: 10px; font-weight: bold;'>Password: </th>
                  <th style='border: 1px solid black; padding: 10px; font-weight: bold;'>Skill: </th>
                  <th style='border: 1px solid black; padding: 10px; font-weight: bold;'>City: </th>
                  <th style='border: 1px solid black; padding: 10px; font-weight: bold;'>Gender: </th>
                </tr>";
        while($row = $result->fetch_assoc()) { 
            echo "<tr>";
                echo "<td style='border: 1px solid black; padding: 10px;'>" . $row["l_Id"]." "."<br /><br />". "</td>";
                echo "<td style='border: 1px solid black; padding: 10px;'>" . $row["l_name"]." "."<br /><br />". "</td>";
                echo "<td style='border: 1px solid black; padding: 10px;'>" . $row["l_contact"]." "."<br /><br />". "</td>";
                echo "<td style='border: 1px solid black; padding: 10px;'>" . $row["l_address"]." "."<br /><br />". "</td>";
                echo "<td style='border: 1px solid black; padding: 10px;'>" . $row["l_email"]." "."<br /><br />". "</td>";
                echo "<td style='border: 1px solid black; padding: 10px;'>" . $row["l_password"]." "."<br /><br />". "</td>";
                echo "<td style='border: 1px solid black; padding: 10px;'>" . $row["l_skill"]." "."<br /><br />". "</td>";
                echo "<td style='border: 1px solid black; padding: 10px;'>" . $row["l_city"]." "."<br /><br />". "</td>";
                echo "<td style='border: 1px solid black; padding: 10px;'>" . $row["l_gender"]." "."<br /><br />". "</td>";
                echo "</tr>";
                
         }
        echo "</table><br><br>";
        echo "</form>";
        echo "</center>";
    } else {
        echo "Error: " . mysqli_error($con);
    }
    $con->close();
?>
