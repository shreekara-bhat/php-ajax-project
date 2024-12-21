<?php

$conn = mysqli_connect("localhost", "root", "", "db-one");

if (isset($_POST['id'])) {
    $id = $_POST['id'];

    echo " <option> Choose State </option>";

    $query = mysqli_query($conn, "select * from state where country_id='$id' ");
    while ($row = mysqli_fetch_array($query)) {
        $id = $row['id'];
        $state = $row['state'];
        echo "<option value='$id'>$state</option>";
    }
}

if (isset($_POST['state_id'])) {
    $id = $_POST['state_id'];

    echo " <option> Choose City </option>";

    $query = mysqli_query($conn, "select * from city where state_id='$id' ");
    while ($row = mysqli_fetch_array($query)) {
        $id = $row['id'];
        $city = $row['city'];
        echo "<option value='$id'>$city</option>";
    }
}
?>