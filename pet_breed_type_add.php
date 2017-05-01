<?php include 'header.php'; ?>
	<section id="section">
	    <h2 class="sectionheading">Add Pet Breed Type</h2> 

	<?php
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		}

		$breed_type = $_POST['breed_type'];

		$sql = "INSERT INTO pet_breed_type (BreedType) VALUES ('$breed_type')";

		if (isset($_POST['add'])) {

			if ($conn->query($sql) === TRUE) {
			    echo '<div class="msg-success">New Breed Type Has been added succesfully</div>';
			} else {
			    echo '<div class="msg-error">Error: ' . $sql . '<br>' . $conn->error . '</div>';
			}
		}

		$conn->close();
	?>

	    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	    	<div class="holder-input">
	    		<label for="">Breed Type</label>
	    		<input type="text" name="breed_type" id="breed_type" class="" required>
	    	</div>
	    	<div class="holder-btn">
				  <input type="submit" name="add" value="Add">
			</div>
	    </form>
	</section>


<?php include 'footer.php'; ?>