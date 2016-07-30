<?php
	echo
		'<h1>Register</h1>
			<form method="post" action="register.php">
				<input type="text" name="u" placeholder="Username" required="required" />
				<input type="text" name="e" placeholder="email" required="required"/>
				<input type="password" name="p" placeholder="password" required="required" id="p"/>
				<input type="password" name="cp" placeholder="Comfirm Password" required="required" id="cp"/>
				<span id="message"></span>
				<button type="submit"> Take me in</button>
			</form>';
?>		
	