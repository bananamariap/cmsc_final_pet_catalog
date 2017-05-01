<?php include 'header.php'; ?>

<?php
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 
?>
<section id="section">
    <h2 class="sectionheading">Add Pet Breed</h2> 
    <form action=""></form>
</section>


<?php include 'footer.php'; ?>