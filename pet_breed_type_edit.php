<?php include 'header.php'; ?>
	<section id="section">
	    <h2 class="sectionheading">Edit Pet Breed Type</h2> 
		
	  <?php 
	  $breed_id = $_GET['breed_id']; 
	  $breed_type = $_POST['breed_type'];
	  ?>

	
	<?php

		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		}

		if(isset($_POST['update'])){

			$sql_update = "UPDATE pet_breed_type SET BreedType='$breed_type' WHERE BreedTypeID='$breed_id'";


			if ($conn->query($sql_update) === TRUE) {
			    echo '<div class="msg-success">Record has been updated succesfully.</div>';;
			} else {
			    echo '<div class="msg-error">Error: ' . $sql_update . '<br>' . $conn->error . '</div>';
			}

	 	} 

		$sql = "SELECT * FROM pet_breed_type WHERE BreedTypeID = '$breed_id'";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
		    // output data of each row
		    while($row = $result->fetch_assoc()) { ?>

		    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>?breed_id=<?php echo $row['BreedTypeID'];?>">
		   	 	<div class="holder-input">
		    		<label for="">Breed Type ID</label>
		    		<input type="text" name="breed_type_id" id="breed_type_id" class="" value="<?php echo $row['BreedTypeID']; ?>" readonly>
		    	</div>
		    	<div class="holder-input">
		    		<label for="">Breed Type</label>
		    		<input type="text" name="breed_type" id="breed_type" class=""  value="<?php echo $row['BreedType']; ?>"  required>
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