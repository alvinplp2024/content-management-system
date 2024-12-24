<?php
include('conn.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $category_id = mysqli_real_escape_string($con, $_POST['category_id']);
    $content = mysqli_real_escape_string($con, $_POST['content']);

    // Insert query to insert content with category
    $insert_query = "INSERT INTO content (category_id, name) VALUES ('$category_id', '$content')";
    $result = mysqli_query($con, $insert_query);

    if ($result) {
        echo "<script>alert('Course content inserted successfully!');</script>";
        echo "<script>window.location.href='admin_dashboard.php';</script>";
    } else {
        echo "<script>alert('Error inserting content. Please try again.');</script>";
    }
}
?>
