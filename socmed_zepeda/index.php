<?php
include "views/header.php";
?>
        <div class="reg-form">
             <p class="title">REGISTER</p>
            <form method="POST" action="models/register_account.php">
                <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="account@email.com">
                    
                <label for="firstname">First Name</label>
                    <input type="text" name="firstname" id="firstname" placeholder="Name">
                    
                <label for="lasttname">Last Name</label>
                      <input type="text" name="lastname" id="lastname" placeholder="Last Name">
                      
                 <label for="password">Password</label>
                       <input type="password" name="password" id="password">
                       
                 <label for="cpassword">Confirm Password</label>
                        <input type="password" name="cpassword" id="cpassword">
                <input type="submit" value="Sign Up">                        
            </form>
        </div>
  <?php 
  include "views/footer.php";
  ?>