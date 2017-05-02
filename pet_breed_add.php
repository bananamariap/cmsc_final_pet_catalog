<?php include 'header.php'; ?>
	<section id="section">
	    <h2 class="sectionheading">Add Pet Breed</h2> 

	<?php
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		}

		$breed = $_POST['breed'];
		$breed_description = $_POST['breed_description'];

		$sql = "INSERT INTO pet_breed (Breed , Description ) VALUES ('$breed' , '$breed_description')";

		if (isset($_POST['add'])) {

			if ($conn->query($sql) === TRUE) {
			    echo '<div class="msg-success">New Breed has been added succesfully.</div>';
			} else {
			    echo '<div class="msg-error">Error: ' . $sql . '<br>' . $conn->error . '</div>';
			}
		}
		$conn->close();

	?>

	    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	    	<div class="holder-input">
				<div class="holder-input">
	    			<label for="breed_type">Breed</label>
					<input type="text" name="breed" id="breed">
	    		
	    		</div>
	    		<div class="holder-input">
	    			<label for="breed_description">Breed Description</label>
	    			<textarea name="breed_description" id="breed_description" cols="30" rows="10"></textarea>
	    		</div>
	    	</div>
	    	<div class="holder-btn">
				  <input type="submit" name="add" value="Add">
			</div>
	    </form>
	</section>
	

<?php include 'footer.php'; ?>