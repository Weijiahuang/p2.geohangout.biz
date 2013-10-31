<h2> Log in </h2>

<form method ='POST' action = '/users/p_login'>

	Email: <input type= 'text' name ='email'>  <br>
	Password:<input type = 'password' name ='password'><br>
	<?php if(isset($error)): ?>
        
            Login failed. Please double check your email and password
        <br>
    <?php endif; ?>
	
	<input type = 'Submit' value = 'Log in'>

</form>