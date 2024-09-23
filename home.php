<?php
$servername = "localhost";
$username = "root";
$password = "root"; 
$dbname = "final_projects";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch table names
$tables_sql = "SHOW TABLES";
$tables_result = $conn->query($tables_sql);

if ($tables_result->num_rows > 0) 
    {
    // Loop through each table
    while ($row = $tables_result->fetch_row()) 
        {
        $table_name = $row[0];
        echo "<h2>Table: $table_name</h2>";

        // Fetch table data
        $data_sql = "SELECT * FROM $table_name";
        $data_result = $conn->query($data_sql);

        if ($data_result->num_rows > 0) {
            // Display table data in a HTML table
            echo "<table border='1'><tr>";
            // Output table headers
            while ($fieldinfo = $data_result->fetch_field()) 
                {
                    echo "<th>" . $fieldinfo->name . "</th>";
                }
            echo "</tr>";
            // Output table data
            while ($data_row = $data_result->fetch_assoc()) 
                {
                 echo "<tr>";
                    foreach ($data_row as $value) 
                    {
                        echo "<td>$value</td>";
                    }
                echo "</tr>";
            }
            echo "</table>";
        } else
             {
                echo "0 results";
            }
    }
}
 else 
    {
        echo "Table not found";
    }

// Close connection
$conn->close();
?>
