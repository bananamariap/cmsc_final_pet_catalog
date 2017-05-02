<?php include 'header.php'; ?>
        <section id="section">
            <h2 class="sectionheading">Administration</h2></br> 
            <p class="label">Animal type &nbsp; </p>
            <select class="label" name="animaltype">
                <option value="all">All</option>
                <option value="dogs">Dogs</option>
                <option value="cat">Cat</option>
            </select>
            &nbsp; &nbsp;
            <p class="label">Status &nbsp; </p>    
            <select class="label">
                <option value="all">All</option>
                <option value="active">Active</option>
                <option value="deactivated">Deactivated</option>
            </select>
            <button id="createpet" type="button" onclick="addpet()">Create Pet Profile</button>  
            </br></br></br></br>
            <table class="pettypetable">
                <tr>
                    <td><img class="petimage" src="noimage.jpg" alt="No Image Selected"></td>
                    <td><img class="petimage" src="noimage.jpg" alt="No Image Selected"></td>
                    <td><img class="petimage" src="noimage.jpg" alt="No Image Selected"></td>
                    <td><img class="petimage" src="noimage.jpg" alt="No Image Selected"></td>
                </tr>
                <tr>
                    <td><p>Mimi</p><!--insert pet name here --></td>
                    <td><p>Chocolate</p><!--insert pet name here --></td>
                    <td><p>Isagani</p><!--insert pet name here --></td>
                    <td><p>Tinky Winky</p><!--insert pet name here --></td>
                </tr>
                <tr>
                    <td>
                        <button class="pettypedivbutton" onclick="">Edit</button>
                        <button class="pettypedivbutton" onclick="">Deactivate</button>
                    </td>
                    <td>
                        <button class="pettypedivbutton" onclick="">Edit</button>
                        <button class="pettypedivbutton" onclick="">Deactivate</button>
                    </td>
                    <td>
                        <button class="pettypedivbutton" onclick="">Edit</button>
                        <button class="pettypedivbutton" onclick="">Deactivate</button>
                    </td>
                    <td>
                        <button class="pettypedivbutton" onclick="">Edit</button>
                        <button class="pettypedivbutton" onclick="">Deactivate</button>
                    </td>
                </tr>
            </table>               
        </section>    
<?php include 'footer.php'; ?>         
        <script type="text/javascript" src="addpetfx.js"></script>
