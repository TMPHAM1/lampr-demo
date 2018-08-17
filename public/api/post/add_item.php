<?php
$title = $_POST["title"];
$details = $_POST["details"];
if (empty($title)) {
    $output['errors'][] = 'No Title Found';
}
if (empty($details)) {
    $output['errors'][] = 'No details Found';
}

if (empty($output['errors'])) {
$query = "INSERT INTO `items`(`title`, `details`) VALUES ('$title', '$details')";
$result = mysqli_query($conn, $query); 
        if(mysqli_affected_rows($conn) > 0) {
            $output["success"] = true;
        }
else {
    $ouput["error"][] = "error saving an item";
}

}
?>