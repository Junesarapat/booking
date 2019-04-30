<?php

if(!isset($_SESSION)){
  session_start();
}

if(isset($POST)){
  include 'dbconnect.php'; //if already created dbconnect.php to connect to my DB
  $user = $POST['username];
  $pass = $POST['password];
}


<form name="form" method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
  Login<br>
  <table border="1" style="width: 300px">
    <tbody>
      <tr>
        <td>Username</td>
        <td>
          <input name="username" type="text">
        </td>
      </tr>
      <tr>
        <td>Password</td>
        <td><input name="password" type="password">
        </td>
      </tr>
    </tbody>
  </table>
  <br>
  <input type="submit" name="Submit" value="Login">

?>
