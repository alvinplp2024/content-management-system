<?php
include('conn.php');

if (isset($_POST['bk_cat'])) {
    // Get the form data
    $cat_title = $_POST['book_title'];
    $category_link = $_POST['category_link']; // Get the category link
    
    // Check if the category already exists
    $select_query = "SELECT * FROM categories WHERE name='$cat_title'";
    $result_select = mysqli_query($con, $select_query);
    $number = mysqli_num_rows($result_select);

    if ($number > 0) {
        echo " <script>alert('This category is already present')</script>";
    } else {
        // Insert the new category with the link
        $insert_query = "INSERT INTO categories (name, link) VALUES ('$cat_title', '$category_link')";
        $result = mysqli_query($con, $insert_query);
        
        if ($result) {
            echo " <script>alert('Category has been inserted successfully')</script>";
            // Optionally, you can redirect to another page or refresh the form
            // header("Location: dashboard.php");
        } else {
            echo " <script>alert('Error inserting category')</script>";
        }
    }
}
?>

<h2 class="text-center">INSERT COURSE</h2>
<form action="" method="post" class="mb-2">
    <!-- Category Title Input -->
    <div class="input-group w-90 mb-2">
        <span class="input-group-text bg-success" id="basic-addon1"><i class="fa fa-book" aria-hidden="true"></i></span>
        <input type="text" class="form-control" name="book_title" placeholder="Insert course (Programming)" aria-describedby="basic-addon1" required>
    </div>

    <!-- Category Link Input -->
    <div class="input-group w-90 mb-2">
        <span class="input-group-text bg-success" id="basic-addon2"><i class="fa fa-link" aria-hidden="true"></i></span>
        <input type="text" class="form-control" name="category_link" placeholder="Insert category link (py_read.php)" aria-describedby="basic-addon2" required>
    </div>

    <!-- Submit Button -->
    <div class="input-group w-10 mb-2">
        <button class="button1" name="bk_cat">Insert course</button>
    </div>
</form>
