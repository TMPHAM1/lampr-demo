<?php
$query = 'SELECT * FROM `items`';
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        $row['complete'] = (BOOL)$row['complete'];
        $output['listItems'][] = $row;

    }
    $output ['success'] = "true";
}
else {
    $output['message'] = 'No To Do Items';
}

// $output = json_encode($output);
// print($output);
?>