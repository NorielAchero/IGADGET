<?php
	session_start();
	include("includes/sqlconnection.php");

	// DELETE TO ANY TABLE
	if (isset($_GET['id']) && isset($_GET['table'])) {
		
		$id = $_GET['id'];
		$table = $_GET['table'];
		
		$conn->query("DELETE FROM $table WHERE id='$id'");
	
		$_SESSION['status'] = "Record Deleted Successfully";
		header('location:admin.php');
		$conn->close();
	} else {
		echo "ID or table parameter missing";
	}


	// INSERT TO PRODUCT TABLE
	if (isset($_POST['save_prodtable'])) {
		
		$prodname = $_POST['txtprodname'];
		$proddesc = $_POST['txtproddesc'];
		$price = $_POST['txtprice'];
		$image = $_FILES['txtimage']['name'];
		$category = $_POST['txtcategory'];

		move_uploaded_file($_FILES['txtimage']['tmp_name'], "uploads/" . $image);

		$sql_content = "INSERT INTO prodtable(prodname, proddesc, price, image, category)
		VALUES ('$prodname', '$proddesc' , '$price', '$image', '$category' )";

		if ($conn->query($sql_content) === TRUE) {
			$id = $conn->insert_id;

			$_SESSION['status'] = "Success";
			header('location:admin.php');
		}
		else {
			$_SESSION['status'] = "Failed";
			header('location:insert_prodtable.php');
		}
		$conn->close();
	}


	// UPDATE TO PRODUCT TABLE
	if(isset($_POST['update_prodtable'])){
	
		$id = $_POST['txtid'];
		$prodname = $_POST['txtprodname'];
		$proddesc = $_POST['txtproddesc'];
		$price = $_POST['txtprice'];
		$image_new = $_FILES['txtimage']['name'];
		$image_old = $_POST['txtold_image'];
		$category = $_POST['txtcategory'];


		if($image_new != ''){
			$update_image = $image_new;
			
		}else{
			$update_image = $image_old;
		}

		echo "$update_image";

		move_uploaded_file($_FILES['txtimage']['tmp_name'], "uploads/" . $update_image);

		$sql_content = "UPDATE prodtable SET prodname = '$prodname', proddesc = '$proddesc', price = '$price', image = '$update_image', category = '$category'  WHERE id='$id'";
	
		if ($conn->query($sql_content) === TRUE) {
			$_SESSION['status'] = "Success";
			header('location:admin.php');
		} else {
			$_SESSION['status'] = "Failed";
			header('location:edit_prodtable.php?id=' . $id);
		}
		
		$conn->close();
	}	
		


	// INSERT TO NAVIGATION TABLE
	if (isset($_POST['save_nav'])) {
		

		$brand = $_POST['txtBrand'];
		$nav1 = $_POST['txtNav1'];
		$nav2 = $_POST['txtNav2'];
		$nav3 = $_POST['txtNav3'];
		$nav4 = $_POST['txtNav4'];



		$sql_content = "INSERT INTO navbar(brand, nav1, nav2, nav3, nav4)
		VALUES ('$brand', '$nav1', '$nav2', '$nav3', '$nav4')";

		if ($conn->query($sql_content) === TRUE) {
			$id = $conn->insert_id;

			$_SESSION['status'] = "Portfolio Content Record Inserted Successfully";
			header('location:admin.php');
		}
		else {
			$_SESSION['status'] = "Error: Insert Failed.....";
			header('location:insert_nav.php');
		}
		$conn->close();
	}

	// UPDATE TO NAVIGATION TABLE
	if(isset($_POST['update_nav'])){
	
		$id = $_POST['txtid'];
		$brand = $_POST['txtBrand'];
		$nav1 = $_POST['txtNav1'];
		$nav2 = $_POST['txtNav2'];
		$nav3 = $_POST['txtNav3'];
		$nav4 = $_POST['txtNav4'];

		$sql_content = "UPDATE navbar SET brand ='$brand', nav1 = '$nav1', nav2  = '$nav2', nav3 = '$nav3',  nav4 = '$nav4' WHERE id='$id'";
	
		if ($conn->query($sql_content) === TRUE) {
			$_SESSION['status'] = "Portfolio Content Record Updated Successfully";
			header('location:admin.php');
		} else {
			$_SESSION['status'] = "Error: Update Failed";
			header('location:edit_nav.php?id=' . $id);
		}
		
		$conn->close();
	}


	// INSERT TO SECOND SECTION TABLE
	if (isset($_POST['save_secondSection'])) {
		
		$image = $_FILES['txtImage']['name'];

		move_uploaded_file($_FILES['txtImage']['tmp_name'], "uploads/" . $image);

		$sql_content = "INSERT INTO secondSection(image)
		VALUES ('$image')";

		if($conn->query($sql_content) === TRUE){
			$id = $conn->insert_id;
		
			$_SESSION['status'] = "Image Sucessfully Uploaded";
			header('location:admin.php');
			
		}else{
			
			$_SESSION['status'] = "Error: Insert Failed.....";
			header('location:insert_secondSection.php');

		}
		$conn->close();
	}	

	// UPDATE TO SECOND SECTION TABLE
	if(isset($_POST['update_secondSection'])){
	
		$id = $_POST['txtid'];
		$image_new = $_FILES['txtImage']['name'];
		$image_old = $_POST['txtold_image'];

	
		if($image_new != ''){
			$update_image = $image_new;
			
		}else{
			$update_image = $image_old;
		}

		echo "$update_image";

		move_uploaded_file($_FILES['txtImage']['tmp_name'], "uploads/" . $update_image);

		$sql_content = "UPDATE secondSection SET image = '$update_image' WHERE id='$id'";
		
		if($conn->query($sql_content) === TRUE){
			$id = $conn->insert_id;
		
			$_SESSION['status'] = "Image Sucessfully Uploaded";
			header('location:admin.php');
			
		}else{
			
			$_SESSION['status'] = "Error: Insert Failed.....";
			header('location:insert_secondSection.php');

		}

		$conn->close();
	}	

	// INSERT TO THIRD SECTION TABLE
	if (isset($_POST['save_thirdSection'])) {
		
		$profile = $_FILES['txtProfile']['name'];
		$description = $_POST['txtDescription'];

		move_uploaded_file($_FILES['txtProfile']['tmp_name'], "uploads/" . $profile);

		$sql_content = "INSERT INTO thirdSection(profile, description)
		VALUES ('$profile', 'description')";

		if($conn->query($sql_content) === TRUE){
			$id = $conn->insert_id;
		
			$_SESSION['status'] = "Image Sucessfully Uploaded";
			header('location:admin.php');
			
		}else{
			
			$_SESSION['status'] = "Error: Insert Failed.....";
			header('location:insert_secondSection.php');

		}
		$conn->close();
	}

	// UPDATE TO THIRD SECTION TABLE
	if(isset($_POST['update_thirdSection'])){
	
		$id = $_POST['txtid'];
		$profile_new = $_FILES['txtProfile']['name'];
		$profile_old = $_POST['txtold_profile'];
		$description = $_POST['txtDescription'];

	
		if($profile_new != ''){
			$profile_image = $profile_new;
			
		}else{
			$profile_image = $profile_old;
		}

		echo "$profile_image";

		move_uploaded_file($_FILES['txtProfile']['tmp_name'], "uploads/" . $profile_image);

		$sql_content = "UPDATE thirdSection SET profile = '$profile_image', description = '$description' WHERE id='$id'";
		
		if($conn->query($sql_content) === TRUE){
			$id = $conn->insert_id;
		
			$_SESSION['status'] = "Image Sucessfully Uploaded";
			header('location:admin.php');
			
		}else{
			
			$_SESSION['status'] = "Error: Insert Failed.....";
			header('location:insert_thirdSection.php');

		}

		$conn->close();
	}	
?>