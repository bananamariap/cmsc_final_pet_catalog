<?php include 'header.php'; ?>
        <section id="section">
            <h2 class="sectionheading">Contact Us - General Inquiry</h2></br>   
            <h4>Have a Question? Send us a Message!</h4>  
            <form action="" method="post">
                <table class="adoptiontable">
                    <tr>
                        <td>Pet ID:</td>  
                        <td><input type="text" name="PetID" readonly></td>
                    </tr>
                    <tr>
                        <td>First Name:</td>
                        <td><input type="text" name="ClientFirstName"></td>
                    </tr>
                    <tr>
                        <td>Last Name:</td>
                        <td><input type="text" name="ClientFirstName"></td>
                    </tr>
                    <tr>
                        <td>Address:</td>
                        <td><input type="text" name="Address"></td>
                    </tr>
                    <tr>
                        <td>E-mail:</td>
                        <td><input type="text" name="EmailAddress"></td>
                    </tr>
                    <tr>
                        <td>Contact Number:</td>
                        <td><input type="number" name="ContactNo"></td>
                    </tr>
                    <tr>
                        <td>Inquiry Message:</td>
                        <td><textarea row="5" cols="21" name="Inquiry"></textarea></td>
                    </tr>
                </table> 
                </br>
                <button class="sendbutton" type="text" onclick="">Send</button>               
            </form>         
            </br>
            <h4>Or get in touch with us through:</h4>
            <p> <!-- Insert values here as necessary -->
                E-mail: </br></br>
                Phone: </br></br>
                Address: </br></br>
            </p>            
        </section>
<?php include 'footer.php'; ?>  