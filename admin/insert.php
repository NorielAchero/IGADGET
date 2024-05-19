<?php
// Include the database connection file
include 'includes/sqlconnection.php';

// Path to the CSV file
$csvFile = 'products.csv';

// Open the CSV file for reading
if (($handle = fopen($csvFile, "r")) !== FALSE) {
    // Skip the first row if it contains column headings
    fgetcsv($handle);

    // Prepare the SQL statement
    $stmt = $conn->prepare("INSERT INTO prodtable (id, prodname, proddesc, price, image, category) VALUES (?, ?, ?, ?, ?, ?)");

    // Bind the parameters
    $stmt->bind_param("issdss", $id, $prodname, $proddesc, $price, $image, $category);

    // Loop through the CSV file and insert into database
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $id = $data[0];
        $prodname = $data[1];
        $proddesc = $data[2];
        $price = $data[3];
        $image = $data[4];
        $category = $data[5];

        // Execute the prepared statement
        $stmt->execute();
    }

    // Close the file
    fclose($handle);

    // Close the prepared statement
    $stmt->close();

    echo "CSV data imported successfully.";
} else {
    echo "Error opening the CSV file.";
}

// Close the database connection
$conn->close();
?>