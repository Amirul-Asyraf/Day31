<?php
    include 'db.php';

    function newName($name, $conn) {
        $sql = "INSERT INTO customers(name, status, date_created) VALUES ('$name', '1', NOW()) ";
        // $result = $conn->$query($sql);

        if ($name != null) {
            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
    }

    function getName($name, $conn) {
        $sql = "SELECT name FROM customers WHERE name='$name' ";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $db_name = $row['name'];
        return $db_name;
    }

    function getID($name, $conn) {
        $sql = "SELECT customers_id FROM customers WHERE name='$name' ";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $db_id = $row['customers_id'];
        return $db_id;
    }
?>