<?php include 'header.php'; ?>
	<section id="section">
	    <h2 class="sectionheading">View Pet Breed Type</h2> 

	<!-- Let us create a table view of pet breed type -->
	<?php
	$sql = "SELECT * FROM pet_breed_type";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) { ?>

	  	<table>
        	<thead>
        		<th>Breed Type ID</th>
        		<th>Breed Type Name</th>
        		<th></th>
        	</thead>
        	<tbody>

	    <?php // output data of each row
	    while($row = $result->fetch_assoc()) { 
	        echo '<tr><td>' . $row["BreedTypeID"]. '</td>';
	        echo '<td>' . $row["BreedType"]. '</td>';
	        echo '<td><a href="pet_breed_type_edit.php?breed_id='. $row["BreedTypeID"] . '">Edit</a></td>';
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