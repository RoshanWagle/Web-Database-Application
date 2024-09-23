<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "final_projects";

// Creating connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Checking connection
if ($conn->connect_error) {
    die("Connection failed " . $conn->connect_error);
}
//Setting the format
$sql = "SELECT Customers.name AS CustomerName, Drivers.name AS DriverName, Cars.model AS CarModel, trips.trip_date AS date
FROM trips
JOIN Customers ON trips.customer_id = Customers.customer_id
JOIN Drivers ON trips.driver_id = Drivers.driver_id
JOIN Cars ON trips.car_id = Cars.car_id
ORDER BY Customers.name, trips.trip_date DESC";
$result = $conn->query($sql);

$lastCustomerName = "";
if ($result->num_rows > 0) 
    {
    // Data rows
    while($row = $result->fetch_assoc()) 
        {
        // Check if this row's customer name is different from the last row
        if ($lastCustomerName != $row["CustomerName"]) 
            {
            // If different, print the customer name and update the last customer name
            if ($lastCustomerName != "") {
                // Add a separator if this is not the first customer
                echo "<br>";
            }
            echo "<b>Customer </b>" . $row["CustomerName"] . "<br>";
            $lastCustomerName = $row["CustomerName"];
        }
        echo "Drove by " . $row["DriverName"] . "<br>";
        echo "On " . $row["CarModel"] . "<br>";
        echo "on: " .$row["date"] . "<br>";
    }
 } 
    else
     {
 echo "0 results";
 }
$conn->close();
?>

