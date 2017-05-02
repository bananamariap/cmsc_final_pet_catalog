<?php include 'header.php'; ?>
        <section id="section">
            <h2 class="sectionheading">Contact Us - Pet Adoption</h2></br>   
            <h4>Adopting? Send us a Message!</h4></br>  
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
                        <td><textarea row="5" cols="18" name="Inquiry"></textarea></td>
                    </tr>
                </table> 
                </br>
                <button class="sendbutton" type="text" onclick="">Send</button>               
            </form>            
        </section>
<?php include 'footer.php'; ?>   