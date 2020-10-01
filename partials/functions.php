<?php
// le var esterne non si vedono
function getAll($conn, $table)
{
    $sql = "SELECT * FROM $table";
    $result = $conn->query($sql);
    if ($result && $result->num_rows > 0) {
        $results = [];
        while ($row = $result->fetch_assoc()) {
            $results[] = $row;
        }
    } elseif ($result) {
        $results = [];
    } else {
        $results = false;
    }
    $conn->close();
    return $results;
}
function remove($conn, $table, $id,  $path)
{
    if (empty($id)) {
        die();
    }
    $sql = "DELETE FROM $table WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $id);
    if ($stmt && $stmt->affected_rows > 0) {
        header("Location: $path/index.php?roomId=$id");
    } else {
        header("Location: $path/index.php");
    }
    $stmt->execute();
    $conn->close();
}
function update($id,$conn,$table){
    $sql = "SELECT * FROM $table WHERE id = $id";
    $result = $conn->query($sql);
    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } elseif ($result) {
         $row = '';
    } else {
       $row = false;
    }
    $conn->close();
    return $row;
}
