<?php
	session_start();
	include("includes/sqlconnection.php");

	// DELETE TO ANY TABLE
	if (isset($_GET['id']) && isset($_GET['table']) && isset($_GET['control'])) {
		
		$id = $_GET['id'];
		$table = $_GET['table'];
		$control = $_GET['control'];
		
		$conn->query("DELETE FROM $table WHERE id='$id'");
	

		if($table == 'prodtable' || $table == 'cart' && $control == 'false'){
			$_SESSION['status'] = "Record Deleted Successfully";
			header('location:admin.php');
		}
		else if ($table == 'cart' && $control == 'true'){
			$_SESSION['status'] = "Record Deleted Successfully";
			header('location:../cart.php');
		}



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
		
	// INSERT TO CART TABLE FROM ADD TO CART BUTTON
	if (isset($_POST['save_cart'])) {
		
		$prodid = $_POST['txtprodid'];
		$prodname = $_POST['txtprodname'];
		$proddesc = $_POST['txtproddesc'];
		$price = $_POST['txtprice'];
		$image = $_FILES['txtimage']['name'];
		$category = $_POST['txtcategory'];

		move_uploaded_file($_FILES['txtimage']['tmp_name'], "uploads/" . $image);

		$sql_content = "INSERT INTO cart(prodid, prodname, proddesc, price, image, category)
		VALUES ('$prodid', '$prodname', '$proddesc' , '$price', '$image', '$category' )";

		if ($conn->query($sql_content) === TRUE) {
			$id = $conn->insert_id;

			$_SESSION['status'] = "Success";
			header($location);
		}
		else {
			$_SESSION['status'] = "Failed";
			header($location);
		}
		$conn->close();
	}


		// UPDATE TO CART TABLE
		if(isset($_POST['update_cart'])){

			$id = $_POST['txtid'];
			$prodid = $_POST['txtprodid'];
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
	
			$sql_content = "UPDATE cart SET prodid = '$prodid', prodname = '$prodname', proddesc = '$proddesc', price = '$price', image = '$update_image', category = '$category'  WHERE id='$id'";
		
			if ($conn->query($sql_content) === TRUE) {
				$_SESSION['status'] = "Success";
				header('location:admin.php');
			} else {
				$_SESSION['status'] = "Failed";
				header('location:edit_cart.php?id=' . $id);
			}
			
			$conn->close();
		}	


			// INSERT TO CART TABLE
		if (isset($_POST['save_cartprod'])) {
			
			$prodid = $_POST['txtprodid'];
			$prodname = $_POST['txtprodname'];
			$proddesc = $_POST['txtproddesc'];
			$price = $_POST['txtprice'];
			$image = $_POST['txtimage'];
			$category = $_POST['txtcategory'];


			$sql_content = "INSERT INTO cart(prodid, prodname, proddesc, price, image, category)
			VALUES ('$prodid', '$prodname', '$proddesc' , '$price', '$image', '$category' )";

			$location = 'location:../cart.php';

			if ($conn->query($sql_content) === TRUE) {
				$id = $conn->insert_id;

				$_SESSION['status'] = "Success";
				header($location);
			}
			else {
				$_SESSION['status'] = "Failed";
				header($location);
			}
			$conn->close();
		}
	
?>