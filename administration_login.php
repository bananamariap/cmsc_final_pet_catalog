<?php include 'header.php'; ?>
        <section id="section">
            <h2 class="sectionheading">Administration</h2> 
            </br> 
            <h4 id="adminlogin">Administrator Login</h4>    
            <form id="loginform" method="POST" action="" autocomplete="off">   
                Username: <input type="text" name="username" required></p>             
                Password: &nbsp;<input type="password" name="password" required></p>                  
                <input type="submit" name="login" value="Login">
                </br></br>         
            </form>
        </section>
<?php include 'footer.php'; ?>