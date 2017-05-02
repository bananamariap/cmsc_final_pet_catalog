<?php include 'header.php'; ?>
	<section id="section">
	    <h2 class="sectionheading">View Pet Breed</h2> 

	<!-- Let us create a table view of pet breed type -->
	<?php
	$sql = "SELECT * FROM pet_breed";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) { ?>

	  	<table>
        	<thead>
        		<th>Breed ID</th>
        		<th>Breed Name</th>
        		<th>Breed Description</th>
        		<th></th>
        	</thead>
        	<tbody>

	    <?php // output data of each row
	    while($row = $result->fetch_assoc()) { 
	        echo '<tr><td>' . $row["BreedID"]. '</td>';
	        echo '<td>' . $row["Breed"]. '</td>';
	        echo '<td>' . $row["Description"]. '</td>';
	        echo '<td><a href="pet_breed_edit.php?breed_id='. $row["BreedID"] . '">Edit</a></td>';
	        echo "</tr>";
     } ?>
			</tbody>
        </table>
	<?php } else {
	    echo '<div class="msg-result">No results found.</div>';
	}
	
	$conn->close();
	?>	


	</section>


<?php include 'footer.php'; ?>