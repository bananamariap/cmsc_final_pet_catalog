<?php include 'header.php'; ?>
        <section id="section">
            <h2 class="sectionheading">Edit Profile - <!--insert pet name here --></h2></br> 
            <table>
                <tr>
                    <td>
                        <div id="imgupload"> 
                            <!-- This is where selected image goes in -->
                            <img src="noimage.jpg" alt="No Image Selected">
                            <p><input type="file" value="Select image file"></p>
                        </div>
                    </td>
                    <td>                        
                        <form id="addpetform" action="" method="post">   
                            <table class="addpettable">
                                <tr>
                                    <td>Pet ID:</td>  
                                    <td><input type="text" name="PetID" readonly></td>                          
                                </tr>
                                <tr>
                                    <td>Name:</td>
                                    <td><input type="text" name="PetName"></td>
                                </tr>
                                <tr>
                                    <td>Species:</td>
                                    <td>
                                        <select name="PetTypeID">
                                            <option value="dogs">Dogs</option>
                                            <option value="cat">Cat</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Age Range:</td>
                                    <td><input type="number" name="Age"></td>
                                </tr>
                                <tr>
                                    <td>Location:</td>
                                    <td><input type="text" name="Location"></td>
                                </tr>
                                <tr>
                                    <td>Gender:</td>
                                    <td><select name="Gender">
                                            <option value="female">Female</option>
                                            <option value="male">Male</option>
                                        </select></td>
                                </tr>
                                <tr>
                                    <td>Breed:</td>
                                    <td><input type="text" name="BreedID"></td>
                                </tr>
                                <tr>
                                    <td>Breed Type:</td>
                                    <td><select name="BreedTypeID">
                                            <option value="female">Pure</option>
                                            <option value="male">Mixed</option>
                                        </select></td>
                                </tr>
                                <tr>
                                    <td>Vaccinated:</td>
                                    <td>
                                        <select name="Vaccinated">
                                            <option value="yes">Yes</option>
                                            <option value="no">No</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Neutered:</td>
                                    <td>
                                        <select name="Neutered">
                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Short Description:</td>
                                    <td><input type="text" name="sdesc"></td>
                                </tr>
                                <tr>
                                    <td>Long Description:</td>
                                    <td><textarea rows="5" cols="21" name="ldesc"></textarea></td>
                                </tr>
                                <tr>
                                    <td>
                                        <input class="addpetbutton" type="submit" value="Save">
                                    </td>
                                    <td>
                                        <input class="addpetbutton" type="submit" value="Cancel">
                                    </td>
                                </tr>
                            </table>
                        </form>                        
                    </td>
                </tr>
            </table>






            <!-- insert snippet here -->                        
        </section>  
<?php include 'footer.php'; ?>