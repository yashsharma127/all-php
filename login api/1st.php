<?php

require "next.php";

?>
<!DOCTYPE html>
<html>
  <head>
    <title>Login Page Demo</title>

  </head>
  <body>
    <?php if (isset($failed)) { ?>
    <div id="bad-login">Invalid email or password.</div>
     <?php } ?>

    <form id="login-form" method="post" target="_self">
      <h1>PLEASE SIGN IN</h1>
      <label for="user">User</label>
      <input type="text" name="user" required/>
      <label for="password">Password</label>
      <input type="password" name="password" required/>
      <input type="submit" value="Sign In"/>
    </form>
  </body>
</html>

