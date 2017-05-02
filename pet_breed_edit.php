<?php include 'header.php'; ?>
	<section id="section">
	    <h2 class="sectionheading">Edit Pet Breed</h2> 

	<?php

		$breed_id = $_GET['breed_id'];
		$breed = $_POST['breed'];
		$description = $_POST['breed_description'];

		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		}

		if(isset($_POST['update'])){

			$sql_update = "UPDATE pet_breed SET Breed='$breed', Description='$description' WHERE BreedID='$breed_id'";


			if ($conn->query($sql_update) === TRUE) {
			    echo '<div class="msg-success">Record has been updated succesfully.</div>';;
			} else {
			    echo '<div class="msg-error">Error: ' . $sql_update . '<br>' . $conn->error . '</div>';
			}

	 	} 

		$sql = "SELECT * FROM pet_breed WHERE BreedID = '$breed_id'";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
		    // output data of each row
		    while($row = $result->fetch_assoc()) { ?>


	    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>?breed_id=<?php echo $row['BreedID'];?>">
	    	<div class="holder-input">
		    		<label for="">Breed  ID</label>
		    		<input type="text" name="breed_id" id="breed_id" class="" value="<?php echo $row['BreedID']; ?>" readonly>
		    	</div>
	    	<div class="holder-input">
				<div class="holder-input">
	    			<label for="breed_type">Breed</label>
					<input type="text" name="breed" id="breed" value="<?php echo $row['Breed']; ?>">
	    		
	    		</div>
	    		<div class="holder-input">
	    			<label for="breed_description">Breed Description</label>
	    			<textarea name="breed_description" id="breed_description" cols="30" rows="10"><?php echo $row['Description']; ?></textarea>
	    		</div>
	    	</div>
	    	<div class="holder-btn">
				  <input type="submit" name="update" value="Update">
			</div>
	    </form>

	     <?php  }
		} 

		$conn->close();
	?>

	</section>
	

<?php include 'footer.php'; ?>