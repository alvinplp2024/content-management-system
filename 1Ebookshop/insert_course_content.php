<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Insert Course Content</title>

	<!-- Bootstrap CSS link -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Font Awesome link -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" type="text/css" href="dashboard.css">

</head>

<body class="bg-light">
 <div class="container mt-3">
 	<h1 class="text-center">Insert Course Content</h1>

 	<form action="insert_course_content_db.php" method="post">
 		<div class="form-outline mb-4 w-50 m-auto">
 			<label for="title" class="form-label">Select Category</label>
 			<select name="category_id" id="category_id" class="form-control shadow-none" required>
 				<option value="">Select a category</option>
 				<?php  
 				include('conn.php');
                // Fetch categories from database
                $select_query = "SELECT * FROM categories";
                $result_query = mysqli_query($con, $select_query);

                while ($row = mysqli_fetch_assoc($result_query)) {
                    $cat_name = $row['name'];
                    $cat_id = $row['id'];
                    echo "<option value='$cat_id'>$cat_name</option>";
                }
 				?>
 			</select>
 		</div>

 		<div class="form-outline mb-4 w-50 m-auto">
 			<label for="content" class="form-label">Content</label>
 			<textarea type="text" name="content" class="form-control shadow-none" id="content" rows="10" placeholder="Enter the content here" autocomplete="off" required></textarea>
 		</div>

 		<div class="form-outline mb-4 w-50 m-auto">
 			<input type="submit" name="insert_content" class="btn btn-primary" value="Insert Content">
 		</div>
 	</form>
 </div>
</body>
</html>
